<?php

namespace DesignPatterns\Behavioral\Visitor;

class TextNode implements HtmlNode
{
    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function accept(Visitor $visitor): string
    {
        return $visitor->visitTextNode($this);
    }
}
