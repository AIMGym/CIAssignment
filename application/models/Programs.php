<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * This is the programs database model that is bound to the
 * programs database table.
 */
class Programs extends MY_Model
{
    function _construct()
    {
        parent::_construct('programs', 'id');
    }
    
    //get all the programs form the database
    public function getall()
    {
        $programs = array();
        $count = 0;
        
        foreach($this->all() as $program)
        {
            $program = (array)$program;
            
            $programs[] = array('id' => $program['id'], 'name' => $program['name'],
                                   'caption' => $program['caption'], 'description' => $program['description'],
                                   'date_added' => $program['date_added'],
                                   'location' => $program['location'], 'price' => $program['price'],
                                   'image1' => $program['image1'], 'image2' => $program['image2'],
                                   'image3' => $program['image3'], 'image4' => $program['image4']);
            $count++;
            
        }
        
        if ($count > 0)
        {
            return $programs;
        }
        else
        {
            return null;
        }       
    }
    
    public function getrecent() 
    {
        $allprograms = (array)$this->all();
        $recent = (array)$allprograms[0];
        
        //iterate over the data until we find the most recent program added
        foreach($allprograms as $program){
            $program = (array)$program;
            if($program['date_added'] > $recent['date_added'])
            {
                $recent = $program;
            }
        }
        return $recent;
    }
    
}