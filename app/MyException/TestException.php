<?php

namespace App\MyException;


use App\Events\Event;

class TestException extends \Exception
{
    private $TestException;

    public function __construct($text)
    {
//        $this->TestException = $text;
        $text = $this->TestException;

        event(new Event($text));
    }

}