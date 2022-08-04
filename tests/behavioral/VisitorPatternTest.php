<?php

use DesignPatterns\Behavioral\Visitor\HtmlNodeVisitor;
use DesignPatterns\Behavioral\Visitor\ImageNode;
use DesignPatterns\Behavioral\Visitor\TextNode;
use DesignPatterns\Behavioral\Visitor\Visitor;
use PHPUnit\Framework\TestCase;

/**
 * @covers \DesignPatterns\Behavioral\Visitor\HtmlNodeVisitor
 * @covers \DesignPatterns\Behavioral\Visitor\TextNode
 * @covers \DesignPatterns\Behavioral\Visitor\ImageNode
 */
final class VisitorPatternTest extends TestCase
{
    private Visitor $visitor;

    public function setUp(): void
    {
        $this->visitor = new HtmlNodeVisitor();
    }

    public function testTextNodeAcceptsVisitor(): void
    {
        $this->visitor = new HtmlNodeVisitor();
        $textNode = new TextNode("text node");
        $this->assertSame("text node", $textNode->accept($this->visitor));
    }

    public function testImageNodeAcceptsVisitor(): void
    {
        $this->visitor = new HtmlNodeVisitor();
        $imageNode = new ImageNode("image.png");
        $this->assertSame("image.png", $imageNode->accept($this->visitor));
    }

    public function tearDown(): void
    {
        unset($this->visitor);
    }
}
