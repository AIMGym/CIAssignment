<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * This is the locations database model that is bound to the
 * locations database table.
 */
class Locations extends MY_Model
{
    function _construct()
    {
        parent::_construct('locations', 'id');
    }
    
    //get all the locations form the database
    public function getall()
    {
        $locations = array();
        $count = 0;
        
        foreach($this->all() as $location)
        {
            $location = (array)$location;
            
            $locations[] = array('id' => $location['id'], 'name' => $location['name'],
                                   'caption' => $location['caption'], 'description' => $location['description'],
                                   'address' => $location['address'],
                                   'contact' => $location['contact'],
                                   'image1' => $location['image1'], 'image2' => $location['image2'],
                                   'image3' => $location['image3'], 'image4' => $location['image4']);
            $count++;
            
        }
        
        if ($count > 0)
        {
            return $locations;
        }
        else
        {
            return null;
        }       
    }
    
}