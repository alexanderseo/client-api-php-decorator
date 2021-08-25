<?php
namespace Client\Interfaces;

interface IAuthClient
{
    public function signIn(string $login, string $password): ISignIn;

    public function signInByToken(string $token): ISignInByToken;

}