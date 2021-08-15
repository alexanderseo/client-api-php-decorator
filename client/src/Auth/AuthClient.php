<?php
namespace Client\Auth;

use Client\Request\RequestClient;
use Client\Response\SignIn;

class AuthClient
{
    private $requestClient;

    public function __construct(RequestClient $requestClient)
    {
        $this->requestClient = $requestClient;
    }

    /**
     * @param string $login
     * @param string $password
     */
    public function signIn(string $login, string $password): SignIn
    {
        $bodyRequest = [
            'login'    => $login,
            'password' => $password
        ];

        $endpoint = 'auth';
        $responseObject = $this->requestClient->requestPost($endpoint, $bodyRequest);
        $signIn = new SignIn($responseObject);

        return $signIn;
    }
}