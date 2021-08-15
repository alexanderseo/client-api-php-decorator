<?php
require_once 'vendor/autoload.php';

use Client\Auth\AuthClient;
use Client\Request\RequestClient;

class main
{
    public function get()
    {
        $y = new RequestClient();
        $x = new AuthClient($y);

        return $x->signIn('sasha', '12345');
    }
}

$w = new main();

$z = $w->get();
var_dump($z);