<?php

namespace Client\Decorator;

use Client\Decorator\StringInput;

class JsonResponse implements StringInput
{
    protected $stringInput;

    public function __construct(StringInput $stringInput)
    {
        $this->stringInput = $stringInput;
    }

    public function inputJsonObject(string $jsonObject)
    {
        return $this->stringInput->inputJsonObject($jsonObject);
    }
}