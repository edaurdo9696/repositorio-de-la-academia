<?php

namespace Blogs;

class BlogService {
  
  private $collection;
  public function __construct(){
    $conn = new \MongoDB\Client("mongodb://localhost");
    $this->collection = $conn->edu->blogs;
  }

  public function savePost(string $content, string $user) {
    $us = new \Blogs\UserService;
    if($us->userExists($user) == true){
      $posts = array();
      $posts['post']= $post;   
      $this->collection->insertOne($posts);
    }
    return true;
  }
  
  public function getAllPosts(string $user) { 
    $rt = $this->collection->find();
    $posts = array();
    foreach($rt as $k){
      $posts[] = $k['post'];
    }
    return $usuarios;
  }
}