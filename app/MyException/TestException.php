<?php

namespace App\MyException;

use Throwable;

class TestException extends \Exception
{
    private $param;

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function setParam($message){
        $body = file_get_contents('php://input');
        $decode = (array)json_decode($body);
        $id = $decode['test'];
        echo $message;
        echo $this->param = json_encode($message.$id);

    }


}