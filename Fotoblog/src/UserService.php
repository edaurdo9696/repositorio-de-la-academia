<?php

namespace Blogs;


class UserService {
  
  public function getAllUsers() {
    $fs = new FileStore('usuarios.data');
    $usuarios = $fs->read();
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
        $bl = new \Blogs\FileStore('usuarios.data');
        $usuarios = $this->getAllUsers();
        $usuarios[]= $user;
        // unset
        $bl->save($usuarios);
    }
    return true;
    
    // buscar todos los usuarios
    // agregar este usuario nuevo
    // guardar los usuarios
  }
}