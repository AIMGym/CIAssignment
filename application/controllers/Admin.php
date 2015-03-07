<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Admin extends Application {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('formfields'); 
      
    }

    function index()
    {
        $this->data['title'] = 'Programs Maintenance';
        $this->data['programs'] = $this->programs->all();
        $this->data['pagebody'] = 'admin_list'; 
        $this->render();
    }
  
    // Add a new quotation
    function add()
    {
      $program = $this->programs->create();
      $this->present($program);
    }
    
    // Present a quotation for adding/editing
    function present($program)
    {
        $message = '';
        if (count($this->errors) > 0)
        {
          foreach ($this->errors as $booboo)
            $message .= $booboo . BR;
        }
        $this->data['message'] = $message;
        
        $this->data['fid'] = makeTextField('ID#', 'id', $program->id,"Unique quote identifier, system-assigned",10,10,true);
        $this->data['fname'] = makeTextField('Name', 'name', $program->name);
        $this->data['fcaption'] = makeTextField('Caption', 'caption', $program->caption);
        $this->data['fdescription'] = makeTextArea('Description', 'description', set_value('description'), 'Detailed description of the program', 500, 40, 5);
        $this->data['fcontact'] = makeTextField('Contact', 'contact', set_value('contact'), 'Telephone number and/or email to get hold of the attraction');
        $this->data['flocation'] = makeTextField('Location', 'location', set_value('location'), 'The address of where the attraction is located');
        $this->data['fprice'] = makeTextField('Price', 'price', set_value('price'), 'Cost of the attraction');
        $this->data['fimage1'] = makeFileUploader('Main Picture', 'picmain', 'Choose a file to replace this picture');
        $this->data['fimage2'] = makeFileUploader('Picture 1', 'pic1', 'Choose a file to replace this picture');
        $this->data['fimage3'] = makeFileUploader('Picture 2', 'pic2', 'Choose a file to replace this picture');
        $this->data['fimage4'] = makeFileUploader('Picture 3', 'pic3', 'Choose a file to replace this picture');
        $this->data['fhotel_stars'] = makeComboField('Hotel Stars', 'hotel_stars', '0', $hotel_stars, 'The hotel rating');
        $this->data['ffood_type'] = makeTextField('Food Type', 'food_type', set_value('food_type'), 'Type of Cuisine');
        $this->data['fmenu_url'] = makeTextField('Link to Menu', 'menu_url', set_value('menu_url'), 'Link to restaurants\'s menu');        
        $this->data['fsubmit'] = makeSubmitButton('Add Attraction', 'Add');
        
        
        
        
        $this->data['pagebody'] = 'program_edit';
        
        $this->data['fsubmit'] = makeSubmitButton('Add Program', "Click here to validate the quotation data", 'btn-success');
        
        $this->render();
    }
    
    // process a quotation edit
    function confirm()
    {
        
        $record = $this->programs->create();
        // Extract submitted fields
        $record->id = $this->input->post('id');
        $record->who = $this->input->post('who');
        $record->mug = $this->input->post('mug');
        $record->what = $this->input->post('what');
        
        //validate
        if (empty($record->who))
        $this->errors[] = 'You must specify an author.';
        if (strlen($record->what) < 20)
         $this->errors[] = 'A quotation must be at least 20 characters long.';
        
        //reporompt form
        if (count($this->errors) > 0)
        {
            $this->present($record);
            return; // make sure we don't try to save anything
         }
        //save
        if (empty($record->id)) $this->quotes->add($record);
        else $this->quotes->update($record);
        redirect('/admin');
    }

}