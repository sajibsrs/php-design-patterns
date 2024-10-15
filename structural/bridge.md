# Bridge Design Pattern
Bridge Pattern separates an abstraction from its implementation so that both can evolve independently.

- Abstraction: Defines the interface for high-level functionality.
- Implementor: Defines the interface for the underlying functionality.

### How to apply
```php
// Abstraction

interface Book
{
    public function display(): void;
}
```

```php
// Implementation

interface Format
{
    public function apply(): void;
}
```

```php
class PrintedBook implements Book
{
    public function __construct(private Format $format) {}

    public function display(): void
    {
        echo "Printed book in ";
        $this->format->apply();
    }
}

class DigitalBook implements Book
{
    public function __construct(private Format $format) {}

    public function display(): void
    {
        echo "Digital book in ";
        $this->format->apply();
    }
}
```

```php
class HardCoverFormat implements Format
{
    public function apply(): void
    {
        echo "Hardcover format";
    }
}

class PaperBackFormat implements Format
{
    public function apply(): void
    {
        echo "Paperback format";
    }
}

class PDFFormat implements Format
{
    public function apply(): void
    {
        echo "PDF format";
    }
}

class EPUBFormat implements Format
{
    public function apply(): void
    {
        echo "EPUB format";
    }
}
```

#### Usage:
```php
$printedBook1 = new PrintedBook(new HardCoverFormat());
$printedBook1->display();

$printedBook2 = new PrintedBook(new PaperBackFormat());
$printedBook2->display();

$ebook1 = new DigitalBook(new PDFFormat());
$ebook1->display();

$ebook2 = new DigitalBook(new EPUBFormat());
$ebook2->display();
```

#### Output:
```txt
Printed book in Hardcover format
Printed book in Paperback format

Digital book in PDF format
Digital book in EPUB format
```
