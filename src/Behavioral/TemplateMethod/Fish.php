<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

class Fish extends Animal
{
    public function swim(): string
    {
        return "Fish swims";
    }

    public function fly(): string
    {
        return "Fish don't fly";
    }
}
