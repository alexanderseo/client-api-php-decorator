<?php
namespace Client\Auth;

use Client\Interfaces\IAuthClient;
use Client\Interfaces\ILogout;
use Client\Interfaces\ISignIn;
use Client\Interfaces\ISignInByToken;
use Client\Interfaces\IValidateSession;
use Client\Request\RequestClient;
use Client\Response\SignIn;
use Client\Response\SignInByToken;
use Client\Response\ValidateSessionID;
use Client\Response\Logout;

class AuthClient implements IAuthClient
{
    /**
     * @var RequestClient
     */
    private $requestClient;

    public function __construct(RequestClient $requestClient)
    {
        $this->requestClient = $requestClient;
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
        $responseObject = $this->requestClient->requestPost($endpoint, $bodyRequest);

        return new SignIn(json_decode($responseObject, ARRAY_FILTER_USE_BOTH));
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
        $responseObject = $this->requestClient->requestPost($endpoint, $bodyRequest);

        return new SignInByToken(json_decode($responseObject, ARRAY_FILTER_USE_BOTH));
    }

    /**
     * @param string $sessionID
     * @return IValidateSession
     */
    public function validateSessionID(string $sessionID): IValidateSession
    {
        $bodyRequest = [
            'session'    => $sessionID,
        ];

        $endpoint = 'validateSessionID';
        $responseObject = $this->requestClient->requestPost($endpoint, $bodyRequest);

        return new ValidateSessionID(json_decode($responseObject, ARRAY_FILTER_USE_BOTH));
    }

    /**
     * @return ILogout
     */
    public function logout(string $sessionID): ILogout
    {
        $bodyRequest = [
            'session'    => $sessionID,
        ];

        $endpoint = 'validateSessionID';
        $responseObject = $this->requestClient->requestPost($endpoint, $bodyRequest);

        return new Logout(json_decode($responseObject, ARRAY_FILTER_USE_BOTH));
    }
}