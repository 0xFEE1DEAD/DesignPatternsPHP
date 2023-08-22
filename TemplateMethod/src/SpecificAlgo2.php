<?php

namespace Fee1dead\TemplateMethod;

class SpecificAlgo2 extends TemplatedAlgo
{
    function specificMethod() : self
    {
        echo 'SpecificAlgo2' . PHP_EOL;

        return $this;
    }
}