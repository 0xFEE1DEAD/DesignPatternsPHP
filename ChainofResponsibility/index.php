<?php

require_once './vendor/autoload.php';

use F1eeldead\ChainOfResponsibility\Middlewares\CheckForCredentials;
use F1eeldead\ChainOfResponsibility\Middlewares\CheckForToken; 
use F1eeldead\ChainOfResponsibility\Common\Request; 

$middlewares = (new CheckForCredentials())->setNext(
    new CheckForToken()//->setNext(new AnotherInterface())
);

var_dump($middlewares->handle(
    (new Request())
));

var_dump($middlewares->handle(
    (new Request())->setFormData(['login' => 'login', 'password' => 'password'])
));