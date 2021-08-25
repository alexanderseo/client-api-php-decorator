<?php

namespace Client\Interfaces;

interface IBuilder
{
    public function builderSignIn(string $stringResponse): ISignIn;

    public function builderSignInByToken(string $stringResponse): ISignInByToken;
}