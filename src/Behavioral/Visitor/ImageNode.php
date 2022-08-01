<?php

namespace DesignPatterns\Behavioral\Visitor;

class ImageNode implements HtmlNode
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function accept(Visitor $visitor): string
    {
        return $visitor->visitImageNode($this);
    }
}
