# Memento Design Pattern
The Memento Pattern is used to capture and restore an object's state without exposing internal details.

### How to apply
```php
class BookmarkMemento
{
    public function __construct(private string $name) {}

    public function get(): string
    {
        return $this->name;
    }
}
```

```php
class Chapter
{
    public function __construct(private string $name) {}

    public function get(): string
    {
        return $this->name;
    }

    public function set(string $name): void
    {
        $this->name = $name;
    }

    public function save(): BookmarkMemento
    {
        return new BookmarkMemento($this->name);
    }

    public function restore(BookmarkMemento $memento): void
    {
        $this->name = $memento->get();
    }
}
```

#### Usage:
```php
$chapter = new Chapter("A Long-expected Party");
echo $chapter->get();

$bookmark = $chapter->save();

$chapter->set("The Council of Elrond");
echo $chapter->get();

$chapter->restore($bookmark);
echo $chapter->get();
```

#### Output:
```txt
A Long-expected Party
The Council of Elrond
A Long-expected Party
```
