<?php

    if (!defined('APPPATH'))
        exit('No direct script access allowed');

/**
 * Controller page for the "Locations" page view
 *
 */
class Locations extends Application{
    
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        
        //Required page
        $this->data['pagebody'] = 'Locations';
        
        //Retrieve all programs from relevant database
        $locations = $this->Location->getall();
        $this->data['locations'] = $locations;
        
        $this->render();
    }
    
    //Returns a specified page regarding locations
    function getOne($_id) {

        //Required page
        $this->data['pagebody'] = 'Locations_sub';

        //Retrieve info for specified page by id
        $record = $this->Locations->get($_id);

        //Populating page with from database
        $this->data['id'] = $record->id;
        $this->data['name'] = $record->name;
        $this->data['caption'] = $record->caption;
        $this->data['description'] = $record->description;
        $this->data['address'] = $record->address;
        $this->data['contact'] = $record->contact;
        $this->data['image1'] = $record->image1;
        $this->data['image2'] = $record->image2;
        $this->data['image3'] = $record->image3;
        $this->data['image4'] = $record->image4;

        $this->render();
    }

}
/* End of file Locations.php */
/* Location: application/controllers/Locations.php */