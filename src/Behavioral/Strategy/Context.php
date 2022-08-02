<?php

namespace DesignPatterns\Behavioral\Strategy;

class Context
{
    private $strategy;

    public function setStrategy(Strategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function getStrategy(): Strategy
    {
        return $this->strategy;
    }

    public function execute(): string
    {
        return $this->strategy->execute();
    }
}
