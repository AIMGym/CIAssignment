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
        $this->data['pagebody'] = 'membership';
        
        //Retrieve all programs from relevant database
        $membership = $this->Memberships->getall();
        $this->data['membership'] = $membership;
        
        $this->render();
    }
    
    //Returns a specified page regarding memberships
    function getOne($id) 
    {

        //Required page
        $this->data['pagebody'] = 'membership_sub';

        //Retrieve info for specified page by id
        $membership = $this->Memberships->get($id);

        //Populating page data
        $this->data['id'] = $membership->id;
        $this->data['name'] = $membership->name;
        $this->data['caption'] = $membership->caption;
        $this->data['description'] = $membership->description;
        $this->data['price'] = $membership->price;
        $this->data['image1'] = $membership->image1;
        $this->data['image2'] = $membership->image2;
        $this->data['image3'] = $membership->image3;
        $this->data['image4'] = $membership->image4;

        $this->render();
    }

}
/* End of file Membership.php */
/* Location: application/controllers/Memership.php */