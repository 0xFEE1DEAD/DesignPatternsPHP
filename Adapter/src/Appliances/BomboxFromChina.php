<?php

namespace Fee1dead\Adapter\Appliances;

use Fee1dead\Adapter\Interfaces\ChinesePlugInterface;

class BomboxFromChina implements ChinesePlugInterface
{
    protected $energy = false;

    public function plugIntoSocketWithTwoBars() : void
    {
        $this->energy = true;
    }

    public function usage() : void
    {
        if($this->energy) {
            echo 'Bom bom bom bom' . PHP_EOL;
        } else {
            echo '...' . PHP_EOL;
        }
    }
}