# Flyweight Design Pattern
The Flyweight pattern allows sharing common state across multiple objects to reduce memory usage.

### How to apply
Idea is to create and share digital books with someone. If it doesn't exists already create a new one or share the existing one.

```php
interface BookFlyweight
{
    public function render(string $info): void;
}

class SharedBook implements BookFlyweight
{
    public function __construct(private string $title) {}

    public function render(string $info): void
    {
        echo "Book: {$this->title} is {$info}";
    }
}
```

```php
class BookFactory
{
    private array $books = [];

    public function getBook(string $title): BookFlyweight
    {
        if (!isset($this->books[$title])) {
            $this->books[$title] = new SharedBook($title);
        }

        return $this->books[$title];
    }
}
```

#### Usage:
```php
$factory = new BookFactory();

$book1 = $factory->getBook("The Lord of the Rings");
$book1->render("shared with A");

$book2 = $factory->getBook("The Martian");
$book2->render("shared with B");

$book3 = $factory->getBook("The Lord of the Rings");
$book3->render("shared with C");
```

#### Output:
```txt
Book: The Lord of the Rings is shared with A
Book: The Martian is shared with B
Book: The Lord of the Rings is shared with C
```

#### Analysis:
`$book3` is uses an existing instance which created by `$book1`, instead of creating a new one. We can verify this with the snippet below:

```php
if ($book1 === $book3) {
    echo "Both are the same book instance";
}
```

We should get:
```txt
Both are the same book instance
```
