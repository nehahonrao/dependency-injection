<?php

namespace App\Service;
use App\Service\Capital;
use App\Service\Dash;
use App\Service\Logger;

class Master{
 private Transform $transform;
 private Logger $logger;

public function __construct( Transform $transform,Logger $logger){
        $this->transform=$transform;
        $this->logger=$logger;
}
public function Transform(string $message){
    return $this->transform->transform($message);

}
public function Logger(){
     $this->logger->log($this->message);

}
/**
     * @param string $message
     */

     public function setMessage(string $message){
         $this->message=$message;
}

}