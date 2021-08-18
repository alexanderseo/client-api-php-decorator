<?php

namespace Client\Interfaces;

interface ILogout
{
    public function getResult(): ILogoutResponse;

    public function getError(): IError;
}