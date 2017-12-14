<?php


class register
{
    public $name;
    public $address;
    public $gender;
    public $age;
    public $size;
    public $cost = 2500;

    public function __construct($post)
    {
        foreach ($post as $field => $value){
            preg_replace('/[^A-Za-z0-9\-]/', '', $value);
            $this->$field = strtoupper($value);
        }
    }

    public function exceptions()
    {
        if( ($this->size == 'XXL') || ($this->size == 'L') ) {
            $this->cost += 200;
        }
        if( $this->age > 65 ) {
            $this->cost -= 1000;
        }
    }

    public function display() {
        return (
            $info = [
                'name'      => $this->name,
                'cost'      => $this->cost,
                'gender'    => $this->gender,
                'size'      => $this->size,
                'age'       => $this->age
            ]
        );
    }


}

$runner = new register($_POST);
$runner->exceptions();
$details = json_encode($runner->display());
