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
        $this->load->helper(array('form', 'url'));
        $this->load->helper('formfields'); 
      
    }

    function index()
    {
        $this->data['title'] = 'Programs Maintenance';
        $this->data['programs'] = $this->Programs->getall();
        $this->data['pagebody'] = 'admin_main'; 
        $this->render();
    }
  
    // Add a new quotation
    function add()
    {
      $program = $this->Programs->create();
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
        $this->data['flocation'] = makeTextField('Location', 'location', $program->location, 'The address/location of the program');
        $this->data['fprice'] = makeTextField('Price', 'price', $program->price, 'Cost of the program monthly');
        $this->data['fimage1'] = makeImageUploader('Main Picture', 'image1', 'Choose a file');
        $this->data['fimage2'] = makeImageUploader('Picture 1', 'image2', 'Choose a file');
        $this->data['fimage3'] = makeImageUploader('Picture 2', 'image3', 'Choose a file');
        $this->data['fimage4'] = makeImageUploader('Picture 3', 'image4', 'Choose a file');
               
        $this->data['pagebody'] = 'add_program';
        
        $this->data['fsubmit'] = makeSubmitButton('Add Program', "Click here to validate the quotation data", 'btn-success');
        
        $this->render();
    }
    
    // process a quotation edit
    function confirm()
    {
        
        $record = $this->Programs->create();
        // Extract submitted fields
        $record->id = $this->input->post('id');
        $record->name = $this->input->post('name');
        $record->caption = $this->input->post('caption');
        $record->description = $this->input->post('description');
        $record->location = $this->input->post('location');
        $record->price = $this->input->post('price');
        $record->image1 = $this->input->post('image1');
        
       
            $config['upload_path'] = 'data/images';  
            $config['allowed_types'] = 'gif|jpg|png'; 
            $config['max_size']	= '3000'; //in kilobytes
            $config['max_width']  = '1600';
            $config['max_height']  = '900';
            $config['remove_spaces'] = true;  //substitutes spaces with underscores
            $config['overwrite'] = false; //allows overwriting of previous files
            $this->load->library('upload', $config); //load upload library '/libraries/Upload.php'
                        
            $upload_controls = array('image1', 'image2', 'image3', 'image4');
            foreach ($upload_controls as $uploadpic)
            {    
                //call the codeigniter upload $uploadpic is the form upload control
                if ($this->upload->do_upload($uploadpic))
                {   
                    if($uploadpic == 'picmain'){
                        $record->image1 = '/data/images/' . $_FILES[$uploadpic]['name'];
                    }
                    if($uploadpic == 'pic1'){
                        $record->image2 = '/data/images/' . $_FILES[$uploadpic]['name'];
                    }
                    if($uploadpic == 'pic2'){
                        $record->image3 = '/data/images/' . $_FILES[$uploadpic]['name'];
                    }
                    if($uploadpic == 'pic3'){
                        $record->image4 = '/data/images/' . $_FILES[$uploadpic]['name'];
                    }
                    
                }
                else
                {
                   
                    $this->errors[] = $this->upload->display_errors();
 
                }
            } // end of foreach upload
            
      
        //validate
        if (empty($record->name))
        $this->errors[] = 'You must specify a name.';
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
        if (empty($record->id)) $this->Programs->add($record);
        else $this->Programs->update($record);
        redirect('/admin');
    }
    
    function delete($program)
    {
        //get attraction to delete
        $record = (array)$this->Programs->get($program); 
        //Column names for images
        $filesToDelete = array('image1', 'image2', 'image3', 'image4'); 
        foreach ($filesToDelete as $delete) {
            if($record[$delete] !== '/data/images/default.jpg'){
                unlink(FCPATH.$record[$delete]);
            }
        }
        //delete the record after images were deleted
        $this->Programs->delete($program);
        redirect("/admin");
    }

}