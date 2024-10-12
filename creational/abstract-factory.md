# PHP Abstract Factory Design Pattern
The Abstract Factory pattern lets you produce families of related or dependent objects without specifying their concrete classes.

### How to apply
```php
interface Book
{
    public function getName(): string;
}
```

```php
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

```

```php
interface BookCover
{
    public function getType(): string;
}
```

```php
class FantasyBookCover implements BookCover
{
    public function getType(): string
    {
        return "Fantasy book cover";
    }
}

class ScienceFictionBookCover implements BookCover
{
    public function getType(): string
    {
        return "Science fiction book cover";
    }
}
```

```php
interface BookFactory
{
    public function createBook(string $name): Book;
    public function createBookCover(): BookCover;
}
```

```php
class FantasyBookFactory implements BookFactory
{
    public function createBook(string $name): Book
    {
        return new FantasyBook($name);
    }

    public function createBookCover(): BookCover
    {
        return new FantasyBookCover();
    }
}

class ScienceFictionBookFactory implements BookFactory
{
    public function createBook(string $name): Book
    {
        return new ScienceFictionBook($name);
    }

    public function createBookCover(): BookCover
    {
        return new ScienceFictionBookCover();
    }
}
```

Usage:
```php
$fantasyFactory = new FantasyBookFactory();
$fantasyBook = $fantasyFactory->createBook("Lord of the Rings");
$fantasyBookCover = $fantasyFactory->createBookCover();

echo $fantasyBook->getName();
echo $fantasyBookCover->getType();

$scienceFictionFactory = new ScienceFictionBookFactory();
$scienceFictionBook = $scienceFictionFactory->createBook("The Martian");
$scienceFictionBookCover = $scienceFictionFactory->createBookCover();

echo $scienceFictionBook->getName();
echo $scienceFictionBookCover->getType();
```

Output:
```txt
Lord of the Rings
Fantasy book cover

The Martian
Science fiction book cover
```
