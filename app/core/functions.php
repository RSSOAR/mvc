<?php

function dd(...$vars){
  echo '<pre style="background-color:#f5f5f5;
  color:#212529;
  padding: 10px;
  border-radiuus: 5px;
  font-family: monospace;">';
  echo "<strong> Degug output: </strong><br>";

  foreach($vars as $var){
    echo '<pre style="background-color:#d1d1d1;
    color:#212529;
    padding: 10px;
    border-radiuus: 5px;
    font-family: monospace;">';
    var_dump($var);
     echo "</pre>";
  }

  $backtrace = debug_backtrace()[0];

  echo '<br><br><strong> Arquivos: </strong> ' . $backtrace['file'] . '<br>';
  echo '<strong> Linha: </strong> ' . $backtrace['line'] . '<br>';
  echo "</pre>";
  die();
}