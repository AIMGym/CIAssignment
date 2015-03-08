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
        $location = $this->Location->getall();
        $this->data['location'] = $location;
        
        $this->render();
    }
    
    //Returns a specified page regarding locations
    function getOne($id) {

        //Required page
        $this->data['pagebody'] = 'Locations_sub';

        //Retrieve info for specified page by id
        $location = $this->Location->get($id);

        //Populating page with from database
        $this->data['id'] = $location->id;
        $this->data['name'] = $location->name;
        $this->data['caption'] = $location->caption;
        $this->data['description'] = $location->description;
        $this->data['address'] = $location->address;
        $this->data['contact'] = $location->contact;
        $this->data['image1'] = $location->image1;
        $this->data['image2'] = $location->image2;
        $this->data['image3'] = $location->image3;
        $this->data['image4'] = $location->image4;

        $this->render();
    }

}
/* End of file Locations.php */
/* Location: application/controllers/Locations.php */