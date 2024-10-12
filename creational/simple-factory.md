# # PHP Simple Factory
## # Description
Simple factory simply creates an instance without exposing any instantiation details to the client.

## # Example

```php
interface Book
{
    public function getName(): string;
}
```

```php
class FantasyBook implements Book
{
    public function __construct(private string $name) {}
    public function getName(): string
    {
        return $this->name;
    }
}
```

```php
class BookFactory {
    public static function make($name): Book {
        return new FantasyBook($name);
    }
}
```
How to use:
```php
$book = BookFactory::make("Lord of the Rings");
echo $book->getName();
```
Output:
```txt
Lord of the Rings
```
