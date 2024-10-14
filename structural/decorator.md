# Decorator Design Pattern
The Decorator Pattern allows to attach new behavior by placing them inside a wrapper object that contains the behavior.

### How to apply
```php
interface Book
{
    public function describe(): string;
}

class TextBook implements Book
{
    public function __construct(private string $title,) {}

    public function describe(): string
    {
        return $this->title;
    }
}
```

```php
class CollectorEditionDecorator implements Book
{
    public function __construct(private Book $book) {}

    public function describe(): string
    {
        return $this->book->describe() . ", Collector edition";
    }
}
```

#### Usage:
```php
$book = new TextBook("The Lord of the Rings");
echo $book->describe();

$edition = new CollectorEditionDecorator($book);
echo $edition->describe();
```

#### Output:
```txt
The Lord of the Rings
The Lord of the Rings, Collector edition
```
