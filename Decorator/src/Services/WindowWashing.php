<?php

namespace fee1dead\DecoratorPattern\Services;

use fee1dead\DecoratorPattern\Interfaces\ServiceInterface;

/**
 * Additional service for cleaning
 */
class WindowWashing implements ServiceInterface
{
    protected $service;

    public function __construct(ServiceInterface $service)
    {
        $this->service = $service;
    }

    public function getCost() : float
    {
        return 75.00 + $this->service->getCost();
    }

    public function getDescription() : string
    {
        return $this->service->getDescription() . ' and window washing';
    }
}