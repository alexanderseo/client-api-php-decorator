<?php
namespace Client\Interfaces;

interface ISignInResponse
{
    public function getLkUserID(): string;

    public function getToken(): string;

    public function getSessionID(): string;
}