<?php

namespace DesignPatterns\Behavioral\Visitor;

interface Visitor
{
    public function visitImageNode(ImageNode $imageNode): string;
    public function visitTextNode(TextNode $textNode): string;
}
