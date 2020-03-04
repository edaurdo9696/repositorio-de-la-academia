<?php

namespace Blogs;

class BlogService {
  
  public function savePost(string $content, string $user) {
    $fs = new FileStore($user . '.posts');
    $posts = $fs->read();
    // Agregar $content a $posts
    $posts[] = $content;
    // Luego volver a guardar el archivo
    $resultado = $fs->save($posts, $user . '.posts');
    return $resultado;
    }
  
  public function getAllPosts(string $user) { 
    $fs = new FileStore($user . '.posts');
    $posts = $fs->read();
    return $posts;
  }
}