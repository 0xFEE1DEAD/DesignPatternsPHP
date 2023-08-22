<?php

require_once './vendor/autoload.php';

use Fee1dead\TemplateMethod\SpecificAlgo1;
use Fee1dead\TemplateMethod\SpecificAlgo2;

/**
 * Суть данного паттерна в том, чтобы исключить повторяющийся код
 * Весь повторяющийся код убран в абстрактный класс, а специфичный в наследники
 */
$specificAlgo1 = new SpecificAlgo1;
$specificAlgo2 = new SpecificAlgo2;

$specificAlgo1->doThat();
$specificAlgo2->doThat();
