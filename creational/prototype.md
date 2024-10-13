# Prototype Design Pattern
Prototype pattern is used to create new object by copying existing instance. This helps to avoid object creation cost.

### How to apply
```php
class Book
{
    public function __construct(
        public string $title,
        public string $author,
        public float $price
    ) {}

    public function getDescription(): string
    {
        return sprintf(
            "Title: %s, Author: %s, Price: %s",
            $this->title,
            $this->author,
            $this->price
        );
    }
}
```

#### Usages:
```php
$hobbit = new Book("The Hobbit", "J.R.R. Tolkien", 19.9);
echo $hobbit->getDescription();

$lotr = clone $hobbit;
$lotr->title = "The Lord of the Rings";
echo $lotr->getDescription();
```

#### Output:
```txt
Title: The Hobbit, Author: J.R.R. Tolkien, Price: 19.9
Title: The Lord of the Rings, Author: J.R.R. Tolkien, Price: 19.9
```

#### Tips:
`__clone()` method can be used inside `Book` class to configure the cloning mechanism once the cloning process is complete.
