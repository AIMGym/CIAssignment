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
        
        $gym_info = $this->Gymdata->get(4);
       
        $this->data['name'] = $gym_info['name'];
        $this->data['image'] = $gym_info['image'];
        $this->data['description'] = $gym_info['description'];
        
        $this->render();
    }
}