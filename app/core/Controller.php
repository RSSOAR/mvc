<?php
namespace App\Core;

class Controller{
  protected function view($view, $viewdata = []){
    extract($viewdata);
    
    $viewFile = __DIR__ . '/../views/'. $view . '.php';
    if(!file_exists($viewFile)){
      throw new \Exception("View file not found: " . $viewFile);
    }
    require_once $viewFile;
  }
}