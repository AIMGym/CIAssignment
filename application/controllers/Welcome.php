<?php

    if (!defined('APPPATH'))
        exit('No direct script access allowed');

/**
 * Controller page for the "Home" page view
 *
 */
class Welcome extends Application{
    
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        
        $this->data['pagebody'] = 'Welcome';
        
        $gym_info = $this->Gymdata->important_pic();
       
        $this->data['name'] = $gym_info['name'];
        $this->data['image'] = $gym_info['image'];
        $this->data['description'] = $gym_info['description'];
        
        $this->render();
    }
}

