<?php

namespace Client\ResponsesObjects;

use Client\Interfaces\ISignInResponse;

class SignInResponse implements ISignInResponse
{
    /**
     * @var string
     */
    private $lkUserID;
    /**
     * @var string
     */
    private $token;
    /**
     * @var string
     */
    private $sessionID;

    public function __construct(string $lkUserID, string $token, string $sessionID)
    {
        $this->lkUserID = $lkUserID;
        $this->token = $token;
        $this->sessionID = $sessionID;
    }

    /**
     * @return string
     */
    public function getLkUserID(): string
    {
        return $this->lkUserID;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getSessionID(): string
    {
        return $this->sessionID;
    }
}