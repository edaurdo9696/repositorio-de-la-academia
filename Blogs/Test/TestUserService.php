<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

final class TestUserService extends TestCase{

    public function testUserServiceExiste(){
        $this->assertTrue(class_exists("Blogs\UserService"));
    }

    public function testUserServiceGetUsers(){
        $nu = new \Blogs\UserService;
        $usuarios = $nu->getAllUsers();
        $this->assertCount(7,$usuarios);
        
    }
    public function testUserSave(){
        $nu = new \Blogs\UserService;
        $usuarios = $nu->saveUser("sebastian");
        $this->assertTrue(!empty($usuarios));
        //  $us = $collection->drop();
    }
    



}