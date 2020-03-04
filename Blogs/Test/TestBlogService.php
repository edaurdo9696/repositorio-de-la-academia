<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

final class TestBlogService extends TestCase{

    public function testBlogServiceExiste(){
        $this->assertTrue(class_exists("Blogs\BlogService"));
    }

    public function testSavePost(){
        $bl = new \Blogs\BlogService;
        $post = $bl->savePost("hola todo bien","edus");
        $this->assertTrue(!empty($post));
        // unlink("edus.posts");
        
    }

    // public function testGetAllPost(){   
    //     $bl = new \Blogs\BlogService;
    //     $post = $bl->savePost("hola todo bien","edus");
    //     $post = $bl->savePost("hola todo mal","edus");
    //     $this->assertTrue(!empty($post));
    //     // unlink("edus.posts");
    // }


}