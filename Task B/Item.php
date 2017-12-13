<?php

class Item
{
    public $name;
    public $price;
    public $amount;
    public $size;
    public $item_no;
    public $isle;
    public $description = 'No description yet';

    public function __construct($name, $price, $amount, $size)
    {
        if( (is_numeric($price) && $price > 0 && $price <= 1000) && (is_numeric($amount) && $amount > 0) &&
            (is_numeric($size) && $size > 0) && (preg_match('/[A-za-z]+/i', $name)) ) {

            $this->price = '$' . $price;
            $this->amount = $amount;
            $this->size = $size . 'kg';
            $this->name = $name;
            $this->item_no = rand(00000, 99999);
            $this->isle = rand(00, 15);
        } else {
            echo "Could not create object \n";
            exit();
        }
    }

    public function desc($desc){
        if (preg_match('/[A-za-z]+/i', $desc) ) {
            $this->description = $desc;
        }
    }

    public function details(){
        return (
            "Item is        => $this->name \n".
            "Costs          => $this->price \n".
            "Weighs         => $this->size \n".
            "Found on isle  => $this->isle \n".
            "Quantity left  => $this->amount \n".
            "$this->description\n"
        );
    }


}


$product = new Item('skippy', 989, 4, 5);
//var_dump($product);
//$product->desc('jkbkgk jbjhjk ljjio');
echo $product->details();

