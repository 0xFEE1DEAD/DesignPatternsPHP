<?php

namespace F1eeldead\ChainOfResponsibility\Common;

use F1eeldead\ChainOfResponsibility\Interfaces\RequestInterface;

class Request implements RequestInterface
{
    protected $formData = [];

    public function setFormData(array $formData) : self
    {
        $this->formData = $formData;

        return $this;
    }

    public function getFormData() : array
    {
        return $this->formData;
    }
}