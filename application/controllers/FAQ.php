<?php

    if (!defined('APPPATH'))
        exit('No direct script access allowed');

/**
 * Controller page for the "FAQ" page view
 *
 */
class FAQ extends Application{
    
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        
        $this->data['pagebody'] = 'FAQ';
        
        $gym_info = $this->Gymdata->last();
       
        $this->data['name'] = $gym_info['name'];
        $this->data['image'] = $gym_info['image'];
        $this->data['description'] = $gym_info['description'];
        
        $this->render();
    }
}