<?php

namespace Client\Response;

use Client\Interfaces\IError;
use Client\Interfaces\ILogoutResponse;
use Client\Interfaces\ILogout;
use Client\ResponsesObjects\ErrorResponse;
use Client\ResponsesObjects\LogoutResponse;

class Logout implements ILogout
{
    /**
     * @var LogoutResponse
     */
    private $result;
    /**
     * @var ErrorResponse
     */
    private $error;

    public function __construct(array $array)
    {
        if (array_key_exists('message', $array)) {
            $this->error = new ErrorResponse($array['message'] ?? null);
        } else {
            $this->result = new LogoutResponse($array['result'] ?? null);
        }
    }

    /**
     * @return ILogoutResponse
     */
    public function getResult(): ILogoutResponse
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