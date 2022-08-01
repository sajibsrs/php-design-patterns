<?php

namespace DesignPatterns\Behavioral\Visitor;

class HtmlNodeVisitor implements Visitor
{
    public function visitImageNode(ImageNode $imageNode): string
    {
        return $imageNode->getUrl();
    }

    public function visitTextNode(TextNode $textNode): string
    {
        return $textNode->getText();
    }
}
