# Adapter Design Pattern
The Adapter Pattern allows incompatible interfaces to work together by translating one interface into another.

- **Adaptee:** The class with an incompatible interface that needs to be adapted.
- **Adapter:** The class that implements the client's expected interface and translates requests to the adaptee.

### How to apply
```php
// Adaptee

class AudioBook
{
    public function __construct(private string $name) {}

    public function listen(): void {
        echo "Listening: " . $this->name;
    }
}
```

```php
// The interface expected by the client

interface Book
{
    public function read(): void;
}
```

```php
// Adapter

class BookAdapter implements Book
{
    public function __construct(private AudioBook $audioBook) {}

    public function read(): void
    {
        // Speech to text API code
        $this->audioBook->listen();
    }
}
```

```php
// Client

function bookClient(Book $book): void
{
    $book->read();
}
```

#### Usage:
```php
$audioBook = new AudioBook("The Hobbit");
$bookAdapter = new BookAdapter($audioBook);

bookClient($bookAdapter);
```

#### Output:
```txt
Listening: The Hobbit
```
