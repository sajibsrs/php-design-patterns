<?php

use DesignPatterns\Behavioral\Visitor\HtmlNodeVisitor;
use DesignPatterns\Behavioral\Visitor\ImageNode;
use DesignPatterns\Behavioral\Visitor\TextNode;

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Visitor pattern usage example
 */
$visitor    = new HtmlNodeVisitor();
$imageNode  = new ImageNode("image.png");
$textNode   = new TextNode("Hello text");

echo $imageNode->accept($visitor);
echo $textNode->accept($visitor);
