<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

abstract class Animal
{
    final public function do(): string
    {
        $this->eat();
        $this->move();
        $this->sleep();
        $this->swim();
        $this->fly();

        return self::class;
    }
    
    protected function eat(): string
    {
        return "Animal eats";
    }

    protected function move(): string
    {
        return "Animal moves";
    }

    protected function sleep(): string
    {
        return "Animal sleeps";
    }

    abstract protected function swim(): string;
    abstract protected function fly(): string;
}
