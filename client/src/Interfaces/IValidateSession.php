<?php

namespace Client\Interfaces;

interface IValidateSession
{
    public function getResult(): IValidateSession;

    public function getError(): IError;
}