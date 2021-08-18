<?php

namespace Client\Response;

use Client\Interfaces\IError;
use Client\Interfaces\ISignInByToken;
use Client\Interfaces\ISignInResponse;
use Client\ResponsesObjects\ErrorResponse;
use Client\ResponsesObjects\SignInResponse;

class SignInByToken implements ISignInByToken
{
    /**
     * @var ISignInResponse
     */
    private $result;

    /**
     * @var IError
     */
    private $error;

    public function __construct(array $array)
    {
        if (array_key_exists('lkUserID', $array)) {
            $this->result = new SignInResponse($array['lkUserID'] ?? null, $array['token'] ?? null, $array['sessionID'] ?? null);
        } else {
            $this->error = new ErrorResponse($array['message'] ?? null);
        }
    }

    /**
     * @return ISignInResponse
     */
    public function getResult(): ISignInResponse
    {
        return $this->result;
    }

    /**
     * @return IError
     */
    public function getError(): IError
    {
        return $this->error;
    }
}