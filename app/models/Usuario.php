<?php
namespace App\Models;
class Usuario{
  public function getUserData(){

    //Simulando dados de usuário
    return [
      'nome' => 'Renato Silva',
      'idade' => 53,
      'email' => 'rssoar@gmail.com'
    ];
  }
}