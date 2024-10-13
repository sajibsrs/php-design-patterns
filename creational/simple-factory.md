# Simple Factory Design Pattern
Simple factory simply creates an instance without exposing any instantiation details to the client.

### How to apply

```php
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
```

```php
class BookFactory {
    public static function make($name): Book {
        return new FantasyBook($name);
    }
}
```

#### Usage:
```php
$book = BookFactory::make("Lord of the Rings");
echo $book->getName();
```

#### Output:
```txt
Lord of the Rings
```

#### Note:
Example uses **Constructor Property Promotion** (PHP 8.0) syntax. Which declares and assigns class properties at the same time.

```php
public function __construct(private string $name) {}
```
