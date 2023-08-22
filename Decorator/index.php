<?php

namespace fee1dead\DecoratorPattern;

require_once './vendor/autoload.php';

use fee1dead\DecoratorPattern\Services\FloorCleaning;
use fee1dead\DecoratorPattern\Services\WindowWashing;

/**
 * Суть этого паттерна в том, чтобы изменять поведение класса без наследования.
 * Как бы "украшать"(Decorator) его, расширять функциональность.
 * 
 * Прежде чем унаследоваться от класса, стоит подумать применим ли данный паттерн.
 */
$total = new WindowWashing(new FloorCleaning());

echo $total->getCost() . "\t" . $total->getDescription() . PHP_EOL;