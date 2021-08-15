<?php
namespace Client\Service;

use Client\Decorator\BaseObjectResponse;
use Client\Decorator\ResponseI;

class CheckProperty
{
    private $obj;

    public function __construct(ResponseI $obj)
    {
        $this->obj = $obj;
    }

    public function check()
    {
        if ($this->obj instanceof BaseObjectResponse) {
            return true;
        } else {
            return false;
        }
    }
}