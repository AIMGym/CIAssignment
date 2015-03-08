<?php

    if (!defined('APPPATH'))
        exit('No direct script access allowed');

/**
 * Controller page for the "Programs" page view
 *
 */
class Programs extends Application{
    
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        
        $this->data['pagebody'] = 'Programs';
        
        //Retrieve all programs from relevant database
        $programs = $this->Programs->getall();
        $this->data['Programs'] = $programs;
        
        $this->render();
    }
    
    //Returns a specified page regarding a program
    function getOne($_id) {

        //Required page
        $this->data['pagebody'] = 'Programs_sub';

        //Retrieve info for specified page by id
        $record = $this->Programs->get($_id);

        //Populating page data
        $this->data['id'] = $record->id;
        $this->data['name'] = $record->name;
        $this->data['caption'] = $record->caption;
        $this->data['description'] = $record->description;
        $this->data['data_added'] = $record->date_added;
        $this->data['location'] = $record->location;
        $this->data['price'] = $record->price;
        $this->data['image1'] = $record->image1;
        $this->data['image2'] = $record->image2;
        $this->data['image3'] = $record->image3;
        $this->data['image4'] = $record->image4;

        $this->render();
    }

}
/* End of file Programs.php */
/* Location: application/controllers/Programs.php */