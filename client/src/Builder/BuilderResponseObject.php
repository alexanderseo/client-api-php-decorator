<?php
namespace Client\Builder;

use Client\Interfaces\IBuilder;
use Client\Interfaces\ISignIn;
use Client\Interfaces\ISignInByToken;
use Client\Response\SignIn;
use Client\Response\SignInByToken;
use Client\ResponsesObjects\ErrorResponse;
use Client\ResponsesObjects\SignInResponse;

class BuilderResponseObject implements IBuilder
{
    /**
     * @param string $stringResponse
     * @return ISignIn
     */
    public function builderSignIn(string $stringResponse): ISignIn
    {
        $array = json_decode($stringResponse, JSON_OBJECT_AS_ARRAY);

        $result = array_key_exists('lkUserID', $array) ? new SignInResponse($array['lkUserID'] ?? null, $array['token'] ?? null, $array['sessionID'] ?? null) : null;
        $error = array_key_exists('message', $array) ? new ErrorResponse($array['message'] ?? null) : null;

        return new SignIn($result, $error);
    }

    public function builderSignInByToken(string $stringResponse): ISignInByToken
    {
        $array = json_decode($stringResponse, JSON_OBJECT_AS_ARRAY);

        $result = array_key_exists('lkUserID', $array) ? new SignInResponse($array['lkUserID'] ?? null, $array['token'] ?? null, $array['sessionID'] ?? null) : null;
        $error = array_key_exists('message', $array) ? new ErrorResponse($array['message'] ?? null) : null;

        return new SignInByToken($result, $error);
    }
}