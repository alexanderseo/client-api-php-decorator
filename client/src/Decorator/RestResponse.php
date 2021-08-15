<?php

namespace Client\Decorator;

use Client\Decorator\JsonResponse;
use Client\Decorator\BaseObjectResponse;
use Client\Decorator\BaseObjectError;

class RestResponse extends JsonResponse
{
    public function inputJsonObject(string $jsonObject): ResponseI
    {
        $response = parent::inputJsonObject($jsonObject);
        $responseObject = null;

        if (property_exists($response, 'message')) {
            $responseObject = new BaseObjectError();
            $responseObject->setMessage($response);
            $responseObject->setResult($response);
        } else {
            $responseObject = new BaseObjectResponse();
            $responseObject->setName($response);
            $responseObject->setToken($response);
        }

        return $responseObject;
    }
}