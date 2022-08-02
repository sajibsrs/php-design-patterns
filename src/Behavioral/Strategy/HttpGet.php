<?php

namespace DesignPatterns\Behavioral\Strategy;

class HttpGet implements Strategy
{
    private string $method = "get";
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function execute(): string
    {
        return $this->method;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
