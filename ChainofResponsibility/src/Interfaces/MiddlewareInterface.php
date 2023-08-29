<?php

namespace F1eeldead\ChainOfResponsibility\Interfaces;

interface MiddlewareInterface 
{
    public function setNext(MiddlewareInterface $nextMiddleware) : MiddlewareInterface;
    public function handle(RequestInterface $request) : ResponseInterface;
}