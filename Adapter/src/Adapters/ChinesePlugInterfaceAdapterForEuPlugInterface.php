<?php

namespace Fee1dead\Adapter\Adapters;

use Fee1dead\Adapter\Interfaces\EuPlugInterface;
use Fee1dead\Adapter\Interfaces\ChinesePlugInterface;

class ChinesePlugInterfaceAdapterForEuPlugInterface implements EuPlugInterface
{
    protected $appliance;

    public function __construct(ChinesePlugInterface $appliance)
    {
        $this->appliance = $appliance;
    }

    public function plugIntoSocketWithTwoCircles() : void
    {
        $this->appliance->plugIntoSocketWithTwoBars();
    }

    public function usage() : void
    {
        $this->appliance->usage();
    }
}