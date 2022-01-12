<?php

namespace App\Service;

class Logger {
    public function log(string $message){
        $message .="\n";
        file_put_contents("log.info",$message,FILE_APPEND);
    }
}