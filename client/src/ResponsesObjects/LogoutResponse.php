<?php

namespace Client\ResponsesObjects;

use Client\Interfaces\ILogoutResponse;

class LogoutResponse implements ILogoutResponse
{
    /**
     * @var string
     */
    private $result;

    public function __construct(string $result)
    {
        $this->result = $result;
    }

    public function getResult(): string
    {
        return $this->result;
    }
}