<?php
// header ("Content-Type: text/html; charset=utf-8");
namespace hw11\classes\Pen;
/**
 *Интерфейс
 */
echo "<pre>";
interface InterfaceNameForPenClass
{
    public function getDescribe();
    public function setColor ();
}

class Pen extends Product implements InterfaceNameForPenClass//суперкласс
{
    public function setColor ()
    {
        echo '"У меня есть цвет!" ';
    }
    public function getDescribe()
    {
        echo "Это {$this->name},  модель - {$this->model}, из категории - {$this->category}";
    }
}
 ?>
