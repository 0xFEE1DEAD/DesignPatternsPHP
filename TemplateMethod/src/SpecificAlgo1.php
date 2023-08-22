<?php

namespace Fee1dead\TemplateMethod;

class SpecificAlgo1 extends TemplatedAlgo
{
    function specificMethod() : self
    {
        echo 'SpecificAlgo1' . PHP_EOL;

        return $this;
    }
}