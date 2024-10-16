# Template Method Design Pattern
The Template Method Pattern defines the skeleton of an algorithm in a base class, allowing subclasses to override specific steps of the algorithm without changing its structure.

### How to apply
```php
abstract class BookProcessor
{
    public function __construct(protected string $title) {}

    public function process(): void
    {
        $this->start();
        $this->bind();
        $this->publish();
    }

    protected function start(): void
    {
        echo "Printing: {$this->title}";
    }

    abstract protected function bind(): void;

    protected function publish(): void
    {
        echo "Publishing: {$this->title}";
    }
}
```

```php
class HardcoverProcessor extends BookProcessor
{
    protected function bind(): void
    {
        echo "Hardcover binding: {$this->title}";
    }
}
```

```php
class PaperbackProcessor extends BookProcessor
{
    protected function bind(): void
    {
        echo "Paperback binding: {$this->title}";
    }
}
```

#### Usage:
```php
$hardcoverProcessor = new HardcoverProcessor("The Hobbit");
$hardcoverProcessor->process();

$paperbackProcessor = new PaperbackProcessor("The Martian");
$paperbackProcessor->process();
```

#### Output:
```txt
Printing: The Hobbit
Hardcover binding: The Hobbit
Publishing: The Hobbit

Printing: The Martian
Paperback binding: The Martian
Publishing: The Martian
```
