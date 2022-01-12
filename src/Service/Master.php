<?php

namespace App\Service;
use App\Service\Capital;
use App\Service\Dash;
use App\Service\Logger;

class Master{
 private Transform $transform;
 private Logger $logger;
 private string $message;

public function __construct( Transform $transform,Logger $logger){
        $this->transform=$transform;
        $this->logger=$logger;
}
public function transform(string $message):string{
    return $this->transform->transform($message);

}
public function logger($message){
     $this->logger->log($message);

}
/**
     * @param string $message
     */

     public function setMessage(string $message){
         $this->message= $message;
}

}