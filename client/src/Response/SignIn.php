<?php
namespace Client\Response;

use Client\Interfaces\IError;
use Client\Interfaces\ISignIn;
use Client\Interfaces\ISignInResponse;

class SignIn implements ISignIn
{
    /**
     * @var ?ISignInResponse
     */
    private $result;

    /**
     * @var ?IError
     */
    private $error;

    public function __construct(?ISignInResponse $result, ?IError $error)
    {
        $this->result = $result;
        $this->error = $error;
    }

    /**
     * @return ?ISignInResponse
     */
    public function getResult(): ?ISignInResponse
    {
        return $this->result;
    }

    /**
     * @return ?IError
     */
    public function getError(): ?IError
    {
        return $this->error;
    }
}