<?php

namespace Client\Decorator;

use Client\Decorator\StringInput;

class InputJson implements StringInput
{
    public function inputJsonObject(string $jsonObject)
    {
        return json_decode($jsonObject);
    }
}