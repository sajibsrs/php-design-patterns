# State Design Pattern
The State pattern allows an object to change its behavior when its internal state changes.

### How to apply
```php
interface BookState
{
    public function handle(): void;
}

class AvailableState implements BookState
{
    public function handle(): void
    {
        echo "The book is available";
    }
}

class BorrowedState implements BookState
{
    public function handle(): void
    {
        echo "The book has been borrowed";
    }
}

class ReservedState implements BookState
{
    public function handle(): void
    {
        echo "The book has been reserved for reading";
    }
}
```

```php
class Book
{
    public function __construct(private BookState $state) {}

    public function setState(BookState $state)
    {
        $this->state = $state;
    }

    public function getState(): void
    {
        $this->state->handle();
    }
}
```

#### Usage:
```php
$book = new Book(new AvailableState());
echo $book->getState();

$book->setState(new BorrowedState());
echo $book->getState();

$book->setState(new ReservedState());
echo $book->getState();
```

#### Result:
```txt
The book is available
The book has been borrowed
The book has been reserved for reading
```
