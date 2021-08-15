<?php

namespace Client\Decorator;

use Client\Decorator\ResponseI;

class BaseObjectError implements ResponseI
{
    public $message;
    public $result;

    public function __construct()
    {
        $this->message = null;
        $this->result = null;
    }

    public function setMessage($object): void
    {
        $this->message = $object->message;
    }

    public function setResult($object): void
    {
        $this->result = $object->result;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getResult(): string
    {
        return $this->result;
    }
}