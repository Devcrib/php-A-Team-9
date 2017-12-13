<?php

class Student
{
    public $student_id;
    public $student_name;
    public $student_address;
    public $student_state;
    public $student_zip;
    public $student_age;


    public function __construct($name, $address)
    {
        if( (preg_match('/[a-zA-Z]/i', $name) === 1) && (preg_match('/[a-zA-Z0-9]/', $address) === 1) ) {
            $this->student_id = rand();
            $this->student_name = $name;
            $this->student_address = $address;
        } else {
            echo "Object not created ";
            exit();
        }
    }

    public function setState($state)
    {
        if(isset($this->student_id)  && (!preg_match('/\d+/', $state)) ){
            $this->student_state = $state;
        }
    }

    public function getState()
    {
        if(isset($this->student_id)){
            return $this->student_state;
        }
    }

    public function setZip($zip)
    {
        if(isset($this->student_id)){
            $this->student_zip = $zip;
        }
    }

    public function getZip()
    {
        if(isset($this->student_id)){
            return $this->student_zip;
        }
    }

    public function _set($property_name, $value)
    {
        if(isset($this->student_id)){
            $this->$property_name = $value;
        }
    }

    public function _get($property_name)
    {
        if(isset($this->student_id)){
            return $this->$property_name;
        }
    }
}


//$student_obj = new Student('Ze()()us','Somwia in futa');
//echo $student_obj->student_name;
//$student_obj->setState('Akure');
//echo $student_obj->getState();

$student_obj_2 = new Student('shayo','Somwia in Ikoyi street --');
echo $student_obj_2->student_name;
$student_obj_2->setState('Lo3ndon');
echo $student_obj_2->getState();

//$student_obj->_set('age', '40');
//echo $student_obj->_get('age');

