<?php

namespace DesignPatterns\Behavioral\Strategy;

interface Strategy
{
    public function execute(): string;
    public function getUrl(): string;
}