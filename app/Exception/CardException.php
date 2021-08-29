<?php

namespace App\Exception;
use Exception;
use ReflectionClass;
class CardException extends Exception
{
    public function getShortName(){
        return (new ReflectionClass($this))->getShortName();
    }

}
