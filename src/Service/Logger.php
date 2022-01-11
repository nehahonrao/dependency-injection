<?php

namespace App\Service;

class Logger {
    public function log(string $message){
        file_put_contents("log.info",$message);
    }
}