<?php

namespace App\EventActionClass;
use Throwable;

class LetFunction extends \Exception
{

    private $param;
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function setErr($status){
        return $this->param = json_encode($status);
    }
}