<?php

namespace F1eeldead\ChainOfResponsibility\Middlewares;

use F1eeldead\ChainOfResponsibility\Common\Middleware;
use F1eeldead\ChainOfResponsibility\Common\Response;
use F1eeldead\ChainOfResponsibility\Interfaces\ResponseInterface;
use F1eeldead\ChainOfResponsibility\Interfaces\RequestInterface;

class CheckForCredentials extends Middleware
{
    public function handle(RequestInterface $request) : ResponseInterface
    {
        $formData = $request->getFormData();

        if(array_key_exists('login', $formData) && 
            array_key_exists('password', $formData)
        ) {
            if($formData['login'] === 'login' && $formData['password'] === 'password')
            {
                $request->setFormData(['token' => 'abcdeafeafd']);

                return $this->next($request);
            }            
        }

        return $this->next($request);
    }
}