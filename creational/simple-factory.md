# # PHP Simple Factory
## # Description
Simple factory simply creates an instance without exposing any instantiation details to the client.

## # Example
Interface:
```php
interface Book
{
    public function getName(): string;
}
```
Interface implementation:
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
Simple factory:
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
