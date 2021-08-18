<?php

namespace Client\Interfaces;

interface IValidateSessionResponse
{
    public function getLkUserID(): string;

    public function getToken(): string;
}