<?php

    if (!defined('APPPATH'))
        exit('No direct script access allowed');

/**
 * Controller page for the "Membership" page view
 *
 */
class Membership extends Application{
    
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        
        //Required page
        $this->data['pagebody'] = 'Membership';
        
        //Retrieve all programs from relevant database
        $membership = $this->Membership->getall();
        $this->data['Membership'] = $membership;
        
        $this->render();
    }
    
    //Returns a specified page regarding memberships
    function getOne($_id) {

        //Required page
        $this->data['pagebody'] = 'Membership_sub';

        //Retrieve info for specified page by id
        $record = $this->Memberships->get($_id);

        //Populating page data
        $this->data['id'] = $record->id;
        $this->data['name'] = $record->name;
        $this->data['caption'] = $record->caption;
        $this->data['description'] = $record->description;
        $this->data['price'] = $record->price;
        $this->data['image1'] = $record->image1;
        $this->data['image2'] = $record->image2;
        $this->data['image3'] = $record->image3;
        $this->data['image4'] = $record->image4;

        $this->render();
    }

}
/* End of file Memership.php */
/* Location: application/controllers/Memership.php */