<?php

namespace App\Service;

class Dash implements Transform{

    public function transform(string $string):string{

        return str_replace(' ', '-', $string);
}

}
