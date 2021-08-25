<?php
namespace Client\ResponsesObjects;

use Client\Interfaces\IError;

class ErrorResponse implements IError
{
    /**
     * @var string
     */
    private $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}