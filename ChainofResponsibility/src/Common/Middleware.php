<?php

namespace F1eeldead\ChainOfResponsibility\Common;

use F1eeldead\ChainOfResponsibility\Interfaces\MiddlewareInterface;
use F1eeldead\ChainOfResponsibility\Interfaces\RequestInterface;
use F1eeldead\ChainOfResponsibility\Interfaces\ResponseInterface;

/**
 * Template Method Pattern
 */
abstract class Middleware implements MiddlewareInterface
{
    protected ?MiddlewareInterface $nextMiddleware = null;

    public function setNext(MiddlewareInterface $nextMiddleware) : MiddlewareInterface
    {
        $this->nextMiddleware = $nextMiddleware;

        return $this;
    }

    public function next(RequestInterface $request) : ResponseInterface
    {
        if(!is_null($this->nextMiddleware))
        {
            return $this->nextMiddleware->handle($request);
        }

        return (new Response())->setResponse('ok');
    }

    abstract public function handle(RequestInterface $request) : ResponseInterface;
}