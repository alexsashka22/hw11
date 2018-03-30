<?php
// header ("Content-Type: text/html; charset=utf-8");
namespace classes\Duck;
/**
 *Интерфейс
 */
 // interface InterfaceNameForDuck
 // {
 //     public function showConstant ();
 //     public function getAge ($age);
 //     public function getDescribe();
 //
 // }

 class Duck extends classes\Product implements \InterfaceNameForDuck//суперкласс
 {
     const CONSTANT = 'Bird';
     protected $sex = 'Female';
     protected $age = 12;

     public function showConstant ()
     {
       echo self::CONSTANT;
     }

     public function getAge ($age)
     {
         if ($this->age < $age)
         {
           echo 'Утке осталось недолго :(, потому что ей ' .  $age. ' лет <br />';
         }
         else {
           echo 'Утка ещё молода! Ей всего ' .  $age. ' лет <br />';
       }
     }

     public function getDescribe()
     {
         echo "Цена: {$this->price} руб.. Отряд - " . Duck::CONSTANT . ". Это {$this->name},  вид - {$this->model}, из категории - {$this->category}, пол - {$this->sex}\n";
     }
 }

 ?>
