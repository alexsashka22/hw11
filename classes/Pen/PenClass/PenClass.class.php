<?php
// header ("Content-Type: text/html; charset=utf-8");
namespace hw11\classes\Pen\PenClass;
/**
 * Дочерний класс
 */
interface InterfaceNameForPenClass
{
  public function getMaterial($material);
  public function getInk($ink);
  public function getColor($color);
}

final class PenClass extends Pen implements InterfaceNameForPenClass
{
    protected $material = "пластик";
    protected $ink = "черные";
    protected $color = "синий";

    public function getMaterial($material)
    {
      $this->material = $material;
      return $this;
    }

    public function getInk($ink)
    {
      $this->ink = $ink;
      return $this;
    }

    public function getColor($color)
    {
      $this->color = $color;
      return $this;
    }

    public function getDescribe()
    {
      parent::getDescribe();
      echo ", материал изготовления - " . $this->material . ", чернила - " . $this->ink . ", цвет корпуса - " .  $this->color . '<br />';
    }
}
?>
