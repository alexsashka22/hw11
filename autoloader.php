<?php
// var_dump($pathToFile);die();

function myAutoload($classNameWithNamespace)
{
  //учитываем пространство имён
  $pathToFile = $_SERVER['DOCUMENT_ROOT'] . str_replace('\\', DIRECTORY_SEPARATOR, $classNameWithNameSpace) . '.class.php';
  if (file_exists($pathToFile)) {
    include "$pathToFile";
  }

  var_dump($pathToFile);
  die();
  //Данная функция будет работать, если namespace дублирует 1
}

spl_autoload_register('myAutoload');

 ?>
