<?php

namespace Client\Decorator;

use Client\Decorator\ResponseI;

class BaseObjectResponse implements ResponseI
{
    public $name;
    public $token;

    public function __construct()
    {
        $this->name = null;
        $this->token = null;
    }

    public function setName($object): void
    {
        $this->name = $object->name;
    }

    public function setToken($object): void
    {
        $this->token = $object->token;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getToken(): string
    {
        return $this->token;
    }
}