<?php

namespace Fee1dead\TemplateMethod;

abstract class TemplatedAlgo
{
    /**
     * Код который повторяется от класса в класс
     */
    public function doThat()
    {
        $this
            ->templatedMethod1()
            ->templatedMethod2()
            ->specificMethod();
    }

    /**
     * Код который повторяется от класса в класс
     */
    protected function templatedMethod1() : self
    {
        echo 'step 1' . PHP_EOL;

        return $this;
    }

    /**
     * Код который повторяется от класса в класс
     */
    protected function templatedMethod2() : self
    {
        echo 'step 2' . PHP_EOL;

        return $this;
    }

    /**
     * Некий специфичный для других классов метод
     */
    abstract function specificMethod() : self;
}