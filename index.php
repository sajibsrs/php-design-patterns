<?php

use DesignPatterns\Behavioral\Observer\Mobile;
use DesignPatterns\Behavioral\Observer\Desktop;
use DesignPatterns\Behavioral\Observer\Subject;
use DesignPatterns\Behavioral\Strategy\Context;
use DesignPatterns\Behavioral\Strategy\HttpGet;
use DesignPatterns\Behavioral\Strategy\HttpPost;
use DesignPatterns\Behavioral\Visitor\TextNode;
use DesignPatterns\Behavioral\Visitor\ImageNode;
use DesignPatterns\Behavioral\Visitor\HtmlNodeVisitor;

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Visitor pattern usage example
 */
$visitor    = new HtmlNodeVisitor();
$imageNode  = new ImageNode("image.png");
$textNode   = new TextNode("Hello text");

print("--- Visitor pattern ---\n");

printf("Image source: %s\n", $imageNode->accept($visitor));
printf("Text content: %s\n", $textNode->accept($visitor));

/**
 * Strategy pattern usage example
 */
$context            = new Context();
$HttpGetStrategy    = new HttpGet("/home");

$context->setStrategy($HttpGetStrategy);

print("--- Strategy pattern ---\n");

printf("HTTP method: %s\n", $context->execute());
printf("Request URL: %s\n", $context->getStrategy()->getUrl());

$HttpSetStrategy = new HttpPost("/contact");

$context->setStrategy($HttpSetStrategy);

printf("HTTP method: %s\n", $context->execute());
printf("Request URL: %s\n", $context->getStrategy()->getUrl());

/**
 * Observer pattern usage example
 */
$subject    = new Subject();
$mobile     = new Mobile();
$desktop    = new Desktop();

$subject->attach($mobile);
$subject->attach($desktop);

print("--- Observer pattern ---\n");

$subject->notify();
