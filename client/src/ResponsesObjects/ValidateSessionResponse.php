<?php

namespace Client\ResponsesObjects;

use Client\Interfaces\IValidateSessionResponse;

class ValidateSessionResponse implements IValidateSessionResponse
{
    /**
     * @var string
     */
    private $lkUserID;
    /**
     * @var string
     */
    private $token;

    public function __construct(string $lkUserID, string $token)
    {
        $this->lkUserID = $lkUserID;
        $this->token = $token;
    }

    public function getLkUserID(): string
    {
        return $this->lkUserID;
    }

    public function getToken(): string
    {
        return $this->token;
    }
}