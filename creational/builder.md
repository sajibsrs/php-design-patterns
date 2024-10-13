# Builder Design Pattern
The Builder design pattern is used to construct complex objects step by step. It allows you to create different representations of the same object using the same construction process.

### # How to apply
```php
class Book
{
    public function __construct(
        public string $title,
        public string $author,
        public ?string $genre = null,
        public ?float $price = null,
    ) {}

    public function getDescription(): string
    {
        return sprintf(
            "Title: %s, Author: %s, Genre: %s, Price: %s",
            $this->title,
            $this->author,
            $this->genre ?? 'N/A',
            $this->price ?? 'N/A'
        );
    }
}
```

```php
class BookBuilder
{
    private ?string $title = null;
    private ?string $author = null;
    private ?string $genre = null;
    private ?float $price = null;

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;
        return $this;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;
        return $this;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function build(): Book
    {
        return new Book(
            $this->title,
            $this->author,
            $this->genre,
            $this->price
        );
    }
}
```

#### Usage:
```php
$builder = new BookBuilder();
$book = $builder
    ->setTitle("The Martian")
    ->setAuthor("Andy Weir")
    ->setGenre("Science Fiction")
    ->setPrice(14.99)
    ->build();

echo $book->getDescription();
```

#### Output:
```txt
Title: The Martian, Author: Andy Weir, Genre: Science Fiction, Price: 14.99
```
