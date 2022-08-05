<?php

use DesignPatterns\Behavioral\Observer\Mobile;
use DesignPatterns\Behavioral\Observer\Desktop;
use DesignPatterns\Behavioral\Observer\Subject;
use DesignPatterns\Behavioral\Strategy\Context;
use DesignPatterns\Behavioral\Strategy\HttpGet;
use DesignPatterns\Behavioral\Strategy\HttpPost;
use DesignPatterns\Behavioral\TemplateMethod\Bird;
use DesignPatterns\Behavioral\TemplateMethod\Fish;
use DesignPatterns\Behavioral\Visitor\TextNode;
use DesignPatterns\Behavioral\Visitor\ImageNode;
use DesignPatterns\Behavioral\Visitor\HtmlNodeVisitor;
use DesignPatterns\Creational\Singleton\Singleton;
use DesignPatterns\Structural\Adapter\ConcreteProduct;
use DesignPatterns\Structural\Adapter\Ebook;
use DesignPatterns\Structural\Adapter\PrintedBook;
use DesignPatterns\Structural\Decorator\BookingBuffet;
use DesignPatterns\Structural\Decorator\BookingEntryFee;
use DesignPatterns\Structural\Decorator\BookingSingleRide;
use DesignPatterns\Structural\Facade\ImageUploader;

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
$httpGetStrategy    = new HttpGet("/home");

$context->setStrategy($httpGetStrategy);

print("--- Strategy pattern ---\n");

printf("HTTP method: %s\n", $context->execute());
printf("Request URL: %s\n", $context->getStrategy()->getUrl());

$httpSetStrategy = new HttpPost("/contact");

$context->setStrategy($httpSetStrategy);

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

/**
 * Facade pattern usage example
 */
$imageUploader = new ImageUploader("image.png");

print("--- Facade pattern ---\n");

printf("Uploaded: %s\n", $imageUploader->upload());

/**
 * Adapter pattern usage example
 */

$product        = new ConcreteProduct("SKU10");
$printedBook    = new PrintedBook($product);
$ebook          = new Ebook("SKU20");

print("--- Adapter pattern ---\n");

echo $ebook->placeOrder();
echo $printedBook->placeOrder();

/**
 * Singleton pattern usage example
 */

$singleton  = Singleton::getInstance();

print("--- Singleton pattern ---\n");

echo $singleton;

/**
 * Decorator patter usage example
 */

$entryFee   = new BookingEntryFee();
$singleRide = new BookingSingleRide($entryFee);
$buffet     = new BookingBuffet($entryFee);

print("--- Decorator pattern ---\n");

printf("%1s: %2s USD\n", $entryFee->getDescription(), $entryFee->getPrice());
printf("%1s: %2s USD\n", $singleRide->getDescription(), $singleRide->getPrice());
printf("%1s: %2s USD\n", $buffet->getDescription(), $buffet->getPrice());

/**
 * Template Method patter usage example
 */

$fish = new Fish();
$bird = new Bird();

print("--- Template Method pattern ---\n");

printf("%s\n", $fish->swim());
printf("%s\n", $fish->fly());
printf("%s\n", $bird->swim());
printf("%s\n", $bird->fly());
