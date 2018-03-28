<?php
// header ("Content-Type: text/html; charset=utf-8");

namespace hw11\classes\Bird;

interface InterfaceNameForBird
{
    public function getDescribe();
    public function showConstant ();
}

class Bird extends Product implements InterfaceNameForBird//суперкласс
{
    const CONSTANT = 'Bird';
    protected $sex = 'Female';

    public function showConstant ()
    {
      echo self::CONSTANT;
    }

    public function getDescribe()
    {
        echo "Цена: {$this->price}. Отряд - " . Duck::CONSTANT . ". Это {$this->name},  вид - {$this->model}, из категории - {$this->category}, пол - {$this->sex}\n";
    }
}
 ?>
