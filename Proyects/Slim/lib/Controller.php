<?php
namespace Library;

interface Controller{
    function get($get,$post,&$session);
    function post($get,$post,&$session);

}