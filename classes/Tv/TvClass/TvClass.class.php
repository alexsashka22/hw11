<?php
// header ("Content-Type: text/html; charset=utf-8");
namespace hw11\classes\Tv\TvClass;
/**
 * Дочерний класс
 */
 interface InterfaceNameForTvClass
 {
   public function getDescribe();
 }

class TvClass extends TV implements InterfaceNameForTvClass
{

    public function getDescribe()
    {
        parent::getDescribe();
        echo "Телевизор {$this->name}, модель - {$this->model}, из категории - {$this->category}". '<br />';
    }
}
