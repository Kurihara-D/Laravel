<?php

namespace App\EventActionClass;
class LetFunction
{

    private $param;

    public function setParam($status){
        $this->param = json_encode($status);
    }
}