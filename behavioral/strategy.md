# Strategy Design Pattern
The Strategy Pattern defines a family of algorithms, encapsulates each one, and makes them interchangeable. This allows the algorithm to vary independently from clients that use it.

### How to use
```php
// Strategy interface

interface Format
{
    public function display(string $title): void;
}
```

```php
// Concrete strategies

class HardcoverFormat implements Format
{
    public function display(string $title): void
    {
        echo "{$title} in Hardcover format";
    }
}

class DigitalBookFormat implements Format
{
    public function display(string $title): void
    {
        echo "{$title} in Digital book format";
    }
}

class AudioBookFormat implements Format
{
    public function display(string $title): void
    {
        echo "{$title} in Audio book format";
    }
}
```

```php
// Client

class Book
{
    public function __construct(private string $title) {}

    public function display(Format $format): void
    {
        $format->display($this->title);
    }
}
```

#### Usage:
```php
$hardcover = new HardcoverFormat();
$digitalBook = new DigitalBookFormat();
$audioBook = new AudioBookFormat();

$book = new Book("The Lord of the Rings");

$book->display($hardcover);
$book->display($digitalBook);
$book->display($audioBook);
```

#### Output:
```txt
The Lord of the Rings in Hardcover format
The Lord of the Rings in Digital book format
The Lord of the Rings in Audio book format
```
