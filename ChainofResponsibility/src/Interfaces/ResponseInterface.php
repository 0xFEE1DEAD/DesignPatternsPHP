<?php

namespace F1eeldead\ChainOfResponsibility\Interfaces;

interface ResponseInterface 
{
    public function setResponse(string $response) : ResponseInterface;
    public function __toString() : string;
}