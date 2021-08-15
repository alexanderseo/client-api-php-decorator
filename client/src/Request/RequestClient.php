<?php
namespace Client\Request;

use Client\Decorator\InputJson;
use Client\Decorator\RestResponse;
use Client\Decorator\StringInput;

class RequestClient
{
    public function __construct()
    {
    }

    public function requestPost(string $endpoint, array $bodyRequest)
    {

        $post_data = http_build_query($bodyRequest);
        $url = sprintf('http://127.0.0.1:8080/%s', $endpoint);
        $ch = curl_init();
        $header = ['Content-Type: application/json'];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        $decorator = new InputJson();
        $restResponse = new RestResponse($decorator);

        return $this->returnObject($restResponse, $response);
    }

    private function returnObject(StringInput $inputType, $response)
    {
        return $inputType->inputJsonObject($response);
    }
}