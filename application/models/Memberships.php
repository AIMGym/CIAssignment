<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * This is the memberships database model that is bound to the
 * memberships database table.
 */
class Memberships extends MY_Model
{
    function _construct()
    {
        parent::_construct('memberships', 'id');
    }
    
    //get all the memberships form the database
    public function getall()
    {
        $memberships = array();
        $count = 0;
        
        foreach($this->all() as $membership)
        {
            $membership = (array)$membership;
            
            $memberships[] = array('id' => $membership['id'], 'name' => $membership['name'],
                                   'caption' => $membership['caption'], 'description' => $membership['description'],
                                   'price' => $membership['price'],
                                   'image1' => $membership['image1'], 'image2' => $membership['image2'],
                                   'image3' => $membership['image3'], 'image4' => $membership['image4']);
            $count++;
            
        }
        
        if ($count > 0)
        {
            return $memberships;
        }
        else
        {
            return null;
        }       
    }
    
    
    
}