<?php
namespace Client\Response;

use Client\Decorator\ResponseI;
use Client\Service\CheckProperty;

class SignIn
{
    public $result;
    public $error;

    public function __construct(ResponseI $obj)
    {
        $check = new CheckProperty($obj);
        $this->result = null;
        $this->error = null;
        if ($check->check()) {
            $this->result($obj);
        } else {
            $this->error($obj);
        }
    }

    public function result(ResponseI $obj)
    {
        $this->result = $obj;
    }

    public function error(ResponseI $obj)
    {
        $this->error = $obj;
    }

    public function getResult(): ResponseI
    {
        return $this->result;
    }
}