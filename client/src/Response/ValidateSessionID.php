<?php

namespace Client\Response;

use Client\Interfaces\IError;
use Client\Interfaces\IValidateSession;
use Client\ResponsesObjects\ErrorResponse;
use Client\ResponsesObjects\ValidateSessionResponse;


class ValidateSessionID implements IValidateSession
{
    /**
     * @var ValidateSessionResponse
     */
    private $result;
    /**
     * @var ErrorResponse
     */
    private $error;

    public function __construct(array $array)
    {
        if (array_key_exists('lkUserID', $array)) {
            $this->result = new ValidateSessionResponse($array['lkUserID'] ?? null, $array['token'] ?? null);
        } else {
            $this->error = new ErrorResponse($array['message'] ?? null);
        }
    }

    public function getResult(): IValidateSession
    {
        // TODO: Implement getResult() method.
    }

    public function getError(): IError
    {
        // TODO: Implement getError() method.
    }
}