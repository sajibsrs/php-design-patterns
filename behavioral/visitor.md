# Visitor Design Pattern
The Visitor Pattern allows you to separate an algorithm from the object structure on which it operates. It allows adding further operations to objects without modifying them.

### How to apply
```php
// Visitor

interface GenreVisitor
{
    public function visitFiction(Fiction $fiction): void;
    public function visitFantasy(Fantasy $fantasy): void;
}

class BookGenreVisitor implements GenreVisitor
{
    public function visitFiction(Fiction $fiction): void
    {
        $fiction->printGenre();
    }

    public function visitFantasy(Fantasy $fantasy): void
    {
        $fantasy->renderGenre();
    }
}
```

```php
// Component

interface Genre
{
    public function accept(GenreVisitor $visitor): void;
}

class Fiction implements Genre
{
    public function printGenre(): void
    {
        echo "Visiting Fiction genre";
    }

    public function accept(GenreVisitor $visitor): void
    {
        $visitor->visitFiction($this);
    }
}

class Fantasy implements Genre
{
    public function renderGenre(): void
    {
        echo "Visiting Fantasy genre";
    }

    public function accept(GenreVisitor $visitor): void
    {
        $visitor->visitFantasy($this);
    }
}
```

#### Usage:
```php
$fiction = new Fiction();
$fantasy = new Fantasy();

$visitor = new BookGenreVisitor();

$fiction->accept($visitor);
$fantasy->accept($visitor);
```

### Output:
```txt
Visiting Fiction genre
Visiting Fantasy genre
```
