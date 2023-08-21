<?php

namespace fee1dead\DecoratorPattern\Interfaces;

interface ServiceInterface
{
    public function getCost() : float;
    public function getDescription() : string;
}