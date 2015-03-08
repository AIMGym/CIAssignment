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
        $this->data['fcaption'] = makeTextField('Caption', 'caption', $program->caption, 'Summary of Program');
        $this->data['fdescription'] = makeTextArea('Description', 'description', $program->description, 'Detailed description of the program', 500, 40, 5);
        $this->data['fcontact'] = makeTextField('Contact', 'contact', $program->contact,'Telephone number and/or email to join the program');
        $this->data['flocation'] = makeTextField('Location', 'location', $program->location, 'The address/location of the program');
        $this->data['fprice'] = makeTextField('Price', 'price', $program->price, 'Cost of the program monthly');
        $this->data['fimage1'] = makeImageUploader('Main Picture', 'picmain', 'Choose a file');
        $this->data['fimage2'] = makeImageUploader('Picture 1', 'pic1', 'Choose a file');
        $this->data['fimage3'] = makeImageUploader('Picture 2', 'pic2', 'Choose a file');
        $this->data['fimage4'] = makeImageUploader('Picture 3', 'pic3', 'Choose a file');
               
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
        $record->name = $this->input->post('name');
        $record->caption = $this->input->post('caption');
        $record->description = $this->input->post('description');
        $record->contact = $this->input->post('contact');
        $record->location = $this->input->post('location');
        $record->price = $this->input->post('price');
        $record->image1 = $this->input->post('image1');
        $record->image2 = $this->input->post('image2');
        $record->image3 = $this->input->post('image3');
        $record->image4 = $this->input->post('image4');
        
        //validate
        if (empty($record->name))
        $this->errors[] = 'You must specify a name.';
        if (empty($record->contact))
        $this->errors[] = 'You must specify contact information.';
        if (empty($record->location))
        $this->errors[] = 'You must specify a location.';
        if (empty($record->price))
        $this->errors[] = 'You must specify a price.';
                  
        if (strlen($record->description) < 50)
        $this->errors[] = 'A description must be at least 50 characters long.';
        
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
    
    function delete($program)
    {
        //get attraction to delete
        $record = (array)$this->attractionsDB->get($program); 
        //Column names for images
        $filesToDelete = array('image1', 'image2', 'image3', 'image4'); 
        foreach ($filesToDelete as $delete) {
            if($record[$delete] !== '/data/images/default.jpg'){
                unlink(FCPATH.$record[$delete]);
            }
        }
        //delete the record after images were deleted
        $this->programs->delete($program);
        redirect("/admin");
    }

}