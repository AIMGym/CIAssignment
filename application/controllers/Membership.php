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
        
        $this->data['pagebody'] = 'Membership';
        
        $gym_info = $this->Gymdata->get(3);
       
        $this->data['name'] = $gym_info['name'];
        $this->data['image'] = $gym_info['image'];
        $this->data['description'] = $gym_info['description'];
        
        $this->render();
    }
}