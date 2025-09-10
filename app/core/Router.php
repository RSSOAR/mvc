<?php
namespace App\Core;

use \App\Controllers\HomeController;
use \App\Controllers\Errors\HttpErrorController;
require_once '/../xampp/htdocs/PhpMvc/app/core/functions.php';

class Router {

  public function dispatch($url){
    $url = trim($url, '/');
    $parts = $url ? explode('/', $url) : [];

    $controllerName = $parts[0] ?? 'Home';

    $controllerName = 'App\Controllers\\' . ucfirst($controllerName) . 'Controller';

    $actionName = $parts[1] ?? 'index';

    if(!class_exists($controllerName)){
      $controller = new HttpErrorController();
      $controller->notFound();
      return;
    }

    $controller = new $controllerName();


    if(!method_exists($controller, $actionName)){
      $controller = new HttpErrorController();
      $controller->notFound();
      return;

    }

    $params = array_slice($parts,2);  
   // dd($actionName, $controllerName, $parts, $url);
   dd($params);

    call_user_func_array([$controller, $actionName], $params);
  }
}