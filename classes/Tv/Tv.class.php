<?php
// header ("Content-Type: text/html; charset=utf-8");
namespace hw11\classes\Tv;
/**
 *Интерфейс
 */
interface InterfaceNameForTv
{
  public function changeColor($color);
  public function getDescribe();
}

class Tv extends Product implements InterfaceNameForTv //суперкласс
{
    protected $color = 'Black';
    protected $material = 'Plastic';

    public function changeColor($color)
    {
      $this->color = $color;
    }

    public function getDescribe()
    {
        echo "Цена: {$this->price}. Цвет ТВ: {$this->color}. Материал ТВ: {$this->material}. ";
    }
}
?>
