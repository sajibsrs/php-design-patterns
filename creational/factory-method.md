# PHP Factory Method Design Pattern
In the Factory Method design pattern, the responsibility for object creation is delegated to subclasses.

### How to apply?

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
interface BookFactory {
    public function make(string $name): Book;
}
```

```php
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
```

Usage:
```php
$fantasyBookFactory = new FantasyBookFactory();
$fantasyBook = $fantasyBookFactory->make("Lord of the Rings");
echo $fantasyBook->getName();

$scienceFictionBookFactory = new ScienceFictionBookFactory();
$scienceFictionBook = $scienceFictionBookFactory->make("The Martian");
echo $scienceFictionBook->getName();
```

Output:
```txt
Lord of the Rings
The Martian
````
