# Iterator Design Pattern
Iterator pattern allows sequential access to elements of a collection without exposing its underlying representation.

### How to apply
```php
class BookCollection implements IteratorAggregate
{
    private array $books = [];

    public function add(string $book): void
    {
        $this->books[] = $book;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->books);
    }
}
```

#### Usage:
```php
$collection = new BookCollection();

$collection->add("The Hobbit");
$collection->add("The Lord of the Rings");
$collection->add("The Martian");

foreach ($collection as $book) {
    echo $book . PHP_EOL;
}
```

#### Output:
```txt
The Hobbit
The Lord of the Rings
The Martian
```
