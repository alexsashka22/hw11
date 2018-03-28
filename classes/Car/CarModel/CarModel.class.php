<?php
// header ("Content-Type: text/html; charset=utf-8");
namespace hw11\classes\Car\CarModel;
/**
 * Дочерний класс
 */
 interface InterfaceNameForCarModel
 {
    public function setSpeed($speed);
    public function setColor($color);
    public function getDescribe();
 }

class CarModel extends Car implements InterfaceNameForCarModel
 {
    protected $speed;
    protected $color;

    public function setSpeed($speed)
    {
        $this->speed = $speed;
        return $this;
    }
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }
    public function getDescribe()
    {
        parent::getDescribe();
        echo " has speed {$this->speed} km/h and color {$this->color}" . '<br />';
    }
}
?>
