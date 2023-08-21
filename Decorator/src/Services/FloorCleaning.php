<?php

namespace fee1dead\DecoratorPattern\Services;

use fee1dead\DecoratorPattern\Interfaces\ServiceInterface;

/**
 * It is base service for cleaning
 */
class FloorCleaning implements ServiceInterface
{
    public function getCost() : float
    {
        return 100.00;
    }

    public function getDescription() : string
    {
        return 'Floor cleaning';
    }
}