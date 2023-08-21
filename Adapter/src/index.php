<?php

namespace Fee1dead\Adapter;

require_once '../vendor/autoload.php';

use Fee1dead\Adapter\Appliances\BomboxFromChina;
use Fee1dead\Adapter\Adapters\ChinesePlugInterfaceAdapterForEuPlugInterface;


$house = new EuHouse;
$bombox = new BomboxFromChina;

//Так работать не будет т. к метод требует EuPlugInterface
//$house->usageAppliances($bombox);

/**
 * А используя адаптер, все будет работать.
 * 
 * Таким образом данный паттерн нужен для согласования 2 интерфейсов между собой
 * Для адаптации одного интерфейса под другой.
 */
$house->usageAppliances(
    new ChinesePlugInterfaceAdapterForEuPlugInterface($bombox)
);
