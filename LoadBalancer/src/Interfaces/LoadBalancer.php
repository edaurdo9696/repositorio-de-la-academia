<?php

namespace LB\Interfaces;

interface LoadBalancer{
    public function addServer(Server $server);
    public function removeServer(String $serverName);
    public function getList();
}