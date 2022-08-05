<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

class Bird extends Animal
{
    public function swim(): string
    {
        return "Bird don't swim";
    }

    public function fly(): string
    {
        return "Bird flies";
    }
}
