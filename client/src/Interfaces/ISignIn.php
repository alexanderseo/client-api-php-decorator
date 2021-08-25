<?php
namespace Client\Interfaces;

interface ISignIn
{
    public function getResult(): ?ISignInResponse;

    public function getError(): ?IError;
}