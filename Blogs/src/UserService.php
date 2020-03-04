<?php

namespace Blogs;


class UserService {
  private $collection;
  
  public function __construct(){
    $conn = new \MongoDB\Client("mongodb://localhost");
    $this->collection = $conn->edu->usuarios;
  }

  public function getAllUsers() {
    // find();
    $rt = $this->collection->find();
    $usuarios = array();
    foreach($rt as $k){
      $usuarios[] = $k['name'];
    }
    return $usuarios;
  }
  
  public function userExists(string $user) {
    $usuarios = $this->getAllUsers();
    foreach($usuarios as $u) {
      if ($u == $user) {
        return true;
      }
    }
    return false;
  }
  
  public function saveUser(string $user) {
    // completar
    if($this->userExists($user) == false){
        // $bl = insertOne('usuarios.data');
        $usuarios = array();
        $usuarios['name']= $user;
       
        $this->collection->insertOne($usuarios);
        
        
    }
    return true;
    
    // buscar todos los usuarios
    // agregar este usuario nuevo
    // guardar los usuarios
  }
}