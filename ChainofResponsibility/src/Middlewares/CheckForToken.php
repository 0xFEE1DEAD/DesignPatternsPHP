<?php

namespace F1eeldead\ChainOfResponsibility\Middlewares;

use F1eeldead\ChainOfResponsibility\Common\Middleware;
use F1eeldead\ChainOfResponsibility\Common\Response;
use F1eeldead\ChainOfResponsibility\Interfaces\ResponseInterface;
use F1eeldead\ChainOfResponsibility\Interfaces\RequestInterface;

class CheckForToken extends Middleware
{
    public function handle(RequestInterface $request) : ResponseInterface
    {
        $formData = $request->getFormData();

        if(array_key_exists('token', $formData)) {
            return $this->next($request);
        }

        return (new Response())->setResponse('redirect 302 https://example.com/login');
    }
}