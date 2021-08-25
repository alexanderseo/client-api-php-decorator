<?php

namespace Client\Interfaces;

interface ISignInByToken
{
    public function getResult(): ?ISignInResponse;

    public function getError(): ?IError;
}