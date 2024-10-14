# Proxy Design Pattern
The Proxy Pattern provides a surrogate for another object to control access to it.

### How to apply
```php
interface Book
{
    public function read(): void;
}

class DigitalBook implements Book
{
    public function __construct(private string $title)
    {
        $this->open();
    }

    private function open(): void
    {
        echo "Opening: {$this->title}";
    }

    public function read(): void
    {
        echo "Reading: {$this->title}";
    }
}
```

```php
class BookProxy implements Book
{
    private DigitalBook $book;

    public function __construct(private string $title) {}

    public function read(): void
    {
        if (!isset($this->book)) {
            $this->book = new DigitalBook($this->title); // Lazy loading
        }
        $this->book->read();
    }
}
```

#### Usage:
```php
$proxy = new BookProxy("The Lord of the Rings");
$proxy->read();
```

#### Output:
```txt
Opening: The Lord of the Rings
Reading: The Lord of the Rings
```

#### Analysis:
Subsequent call to `$proxy->read()` will use existing instance cached inside the proxy, instead of creating new one every time.
