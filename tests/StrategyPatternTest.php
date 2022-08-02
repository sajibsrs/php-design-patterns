<?php

use DesignPatterns\Behavioral\Strategy\Context;
use DesignPatterns\Behavioral\Strategy\HttpGet;
use DesignPatterns\Behavioral\Strategy\HttpPost;
use PHPUnit\Framework\TestCase;

/**
 * @covers \DesignPatterns\Behavioral\Strategy\Context
 * @covers \DesignPatterns\Behavioral\Strategy\HttpGet
 * @covers \DesignPatterns\Behavioral\Strategy\HttpPost
 */
final class StrategyPatternTest extends TestCase
{
    private Context $context;

    public function setUp(): void
    {
        $this->context = new Context();
    }

    public function testHttpGetStrategy(): void
    {
        $strategy = new HttpGet("/home");
        $this->context->setStrategy($strategy);
        $this->assertSame("get", $this->context->execute());
    }

    public function testHttpGetUrl(): void
    {
        $strategy = new HttpGet("/home");
        $this->context->setStrategy($strategy);
        $this->assertSame("/home", $this->context->getStrategy()->getUrl());
    }

    public function testHttpPostStrategy(): void
    {
        $strategy = new HttpPost("/contact");
        $this->context->setStrategy($strategy);
        $this->assertSame("post", $this->context->execute());
    }

    public function testHttpPostUrl(): void
    {
        $strategy = new HttpPost("/contact");
        $this->context->setStrategy($strategy);
        $this->assertSame("/contact", $this->context->getStrategy()->getUrl());
    }

    public function tearDown(): void
    {
        unset($this->context);
    }
}
