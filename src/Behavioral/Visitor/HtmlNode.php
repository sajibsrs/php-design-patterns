<?php

namespace DesignPatterns\Behavioral\Visitor;

interface HtmlNode
{
    public function accept(Visitor $visitor): string;
}
