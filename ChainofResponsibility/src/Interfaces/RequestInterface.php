<?php

namespace F1eeldead\ChainOfResponsibility\Interfaces;

interface RequestInterface 
{
    public function setFormData(array $formData) : RequestInterface;
    public function getFormData() : array;
}