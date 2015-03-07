<?php
    
/**
 * CMS model for the gym - like lab 3 - bogus data found online
 *
 * @author AIM-
 */
class Gymdata extends CI_Model {
    
// mock data
	
    var $data = array(
        array('id' => '1', 
            'name' => 'Gym Main Page', 
            'image' => '../data/images/resized/gym_mains.jpg',
            'description' => 'The image shows a BullsEye and some guys training - BUllsEye = AIM !!',
            'importance' => '1'),
        array('id' => '2', 
            'name' => 'About Us', 
            'image' => '../data/images/resized/gym_enviro.jpg',
            'description' => 'Happy people training in our gym - means happy gym',
            'importance' => '2'),
        array('id' => '3', 
            'name' => 'Membership Information', 
            'image' => '../data/images/resized/gym_equipment.jpg',
            'description' => 'Some of the equipment the gym has - to impress people',
            'importance' => '3'),
        array('id' => '4', 
            'name' => 'Programs Information', 
            'image' => '../data/images/resized/gym_runner.jpg',
            'description' => 'Shows that there are programs for girls who want to be fit',
            'importance' => '4'),
        array('id' => '5', 
            'name' => 'FAQs', 
            'image' => '../data/images/resized/gym_smallhead.jpg',
            'description' => 'The guy in this picture has to show people that we don\'t like questions',
            'importance' => '5')
    );


    // Constructor
    public function __construct()
    {
        parent::__construct();
    }

    // retrieve a single gym picture
    public function get($which)
    {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
        {
            if ($record['id'] == $which)
            {
                return $record;
            }
        }
        return null;
    }

    // retrieve all of the pictures
    public function all()
    {
        return $this->data;
    }

    // retrieve the first picture
    public function first() 
    {
        return $this->data[0];
    }

    // retrieve the last picture
    public function last()
    {
        $index = count($this->data) - 1;
        return $this->data[$index];
    }

    // retrieve the most important picture (featured in the home page)
    public function important_pic()
    {
        $important = $this->data[0];
       //iterate over the data 
        foreach($this->data as $record)
        {
            if($record['importance'] < $important['importance'])
            {
                $important = $record;
            }
        }
        return $important;
    }

}

