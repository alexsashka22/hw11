<?php
// header ("Content-Type: text/html; charset=utf-8");
namespace hw11\classes\Car;

class Car extends Product  //суперкласс
 {
    public function getDescribe()
    {
        echo "Price is: {$this->price}. This car is {$this->name}, model - {$this->model}, from category {$this->category}";
    }
}
 ?>
