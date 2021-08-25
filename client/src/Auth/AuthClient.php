<?php
namespace Client\Auth;

use Client\Interfaces\IAuthClient;
use Client\Interfaces\IBuilder;
use Client\Interfaces\IRequest;
use Client\Interfaces\ISignIn;
use Client\Interfaces\ISignInByToken;

class AuthClient implements IAuthClient
{
    /**
     * @var IRequest
     */
    private $requestClient;
    /**
     * @var IBuilder
     */
    private $builderResponse;

    public function __construct(IRequest $requestClient, IBuilder $builderResponse)
    {
        $this->requestClient = $requestClient;
        $this->builderResponse = $builderResponse;
    }

    /**
     * @param string $login
     * @param string $password
     */
    public function signIn(string $login, string $password): ISignIn
    {
        $bodyRequest = [
            'login'    => $login,
            'password' => $password
        ];

        $endpoint = 'auth';

        $responseString = $this->requestClient->requestPost($endpoint, $bodyRequest);

        return $this->builderResponse->builderSignIn($responseString);
    }

    /**
     * @param string $token
     * @return ISignInByToken
     */
    public function signInByToken(string $token): ISignInByToken
    {
        $bodyRequest = [
            'token'    => $token,
        ];

        $endpoint = 'signInByToken';

        $responseString = $this->requestClient->requestPost($endpoint, $bodyRequest);

        return $this->builderResponse->builderSignInByToken($responseString);
    }
}