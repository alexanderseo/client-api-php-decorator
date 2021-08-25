<?php
require_once 'vendor/autoload.php';

use Client\Auth\AuthClient;
use Client\Request\RequestClient;
use Client\Builder\BuilderResponseObject;

class main
{
    public function get()
    {
        $b = new BuilderResponseObject();
        $y = new RequestClient();
        $x = new AuthClient($y, $b);

        return $x->signIn('sasha', '12345');
    }
}

$w = new main();

$z = $w->get();
var_dump($z);