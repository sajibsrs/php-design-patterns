# Composite Design Pattern
The Composite Pattern allows you to build a tree-like structure where individual objects and groups of objects are treated uniformly.

### How to apply
```php
interface BookComponent
{
    public function display(): void;
}

class Chapter implements BookComponent
{
    public function __construct(private string $title) {}

    public function display(): void
    {
        echo $this->title;
    }
}
```

```php
class Book implements BookComponent
{
    private array $chapters = [];

    public function __construct(private string $title) {}

    public function add(Chapter $chapter): void
    {
        array_push($this->chapters, $chapter);
    }

    public function remove(Chapter $chapter): void
    {
        $this->chapters = array_filter(
            $this->chapters,
            fn($cpt) => $cpt !== $chapter
        );
    }

    public function display(): void
    {
        echo $this->title;

        foreach ($this->chapters as $chapter) {
            echo $chapter->display();
        }
    }
}
```

#### Usage:
```php
$chapter1 = new Chapter("A Long-expected Party");
$chapter2 = new Chapter("The Council of Elrond");

$book = new Book("The Lord of the Rings");

$book->add($chapter1);
$book->add($chapter2);
$book->display();

$book->remove($chapter2);
$book->display();
```

#### Output:
```txt
The Lord of the Rings
A Long-expected Party
The Council of Elrond

The Lord of the Rings
A Long-expected Party
```

#### Improvement:
In the example above we used single interface `BookComponent` to produce both **leaf** and **composite** that makes it so useful. However, **composite** has more methods than the **leaf**. During usages it'd be useful to distinguish which one is **leaf** and which one is **composite**, as you might want to use from the extra methods it provides.

To solve this we can introduce a new method in the interface:
```php
interface BookComponent
{
    public function display(): void;
    public function isComposite(): bool;
}
```

Additionally, **SplObjectStorage** would be a better choice than **ARRAY** to store objects in PHP.
