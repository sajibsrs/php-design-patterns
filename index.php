<?php

declare(strict_types=1);

interface Book
{
    public function getName(): string;
}

class FantasyBook implements Book
{
    public function __construct(private string $name) {}
    public function getName(): string
    {
        return $this->name;
    }
}

class ScienceFictionBook implements Book
{
    public function __construct(private string $name) {}
    public function getName(): string
    {
        return $this->name;
    }
}

interface BookFactory {
    public function make(string $name): Book;
}

class FantasyBookFactory implements BookFactory {
    public function make(string $name): Book
    {
        return new FantasyBook($name);
    }
}

class ScienceFictionBookFactory implements BookFactory {
    public function make(string $name): Book
    {
        return new ScienceFictionBook($name);
    }
}

$fantasyBookFactory = new FantasyBookFactory();
$fantasyBook = $fantasyBookFactory->make("Lord of the Rings");
echo $fantasyBook->getName() . "\n";

$scienceFictionBookFactory = new ScienceFictionBookFactory();
$scienceFictionBook = $scienceFictionBookFactory->make("Dune");
echo $scienceFictionBook->getName() . "\n";
