<?php

namespace Client\Interfaces;

interface IRequest
{
    public function requestPost(string $endpoint, array $bodyRequest): string;
}