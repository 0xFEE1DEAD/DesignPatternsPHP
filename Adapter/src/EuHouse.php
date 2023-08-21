<?php

namespace Fee1dead\Adapter;

use Fee1dead\Adapter\Interfaces\EuPlugInterface;

class EuHouse
{
    public function usageAppliances(EuPlugInterface $appliance)
    {
        $appliance->plugIntoSocketWithTwoCircles();
        $appliance->usage();
    }
}