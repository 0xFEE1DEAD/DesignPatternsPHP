<?php

namespace F1eeldead\ChainOfResponsibility\Common;

use F1eeldead\ChainOfResponsibility\Interfaces\ResponseInterface;

class Response implements ResponseInterface
{
    protected array $response = [];

    public function setResponse(string $response) : ResponseInterface
    {
        $this->response[] = $response;

        return $this;
    }

    public function __toString() : string
    {
        return implode(' ', $this->response);
    }
}