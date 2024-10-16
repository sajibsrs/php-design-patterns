# Mediator Design Pattern
The Mediator Pattern facilitates communication between objects, promoting loose coupling by preventing them from referring to each other directly. Instead, objects interact through a mediator.

### How to apply
```php
interface Mediator
{
    public function notify(string $event): void;
}

class BookStoreMediator implements Mediator
{
    public function notify(string $event): void
    {
        echo $event;
    }
}
```

```php
abstract class Party
{
    public function __construct(protected Mediator $mediator) {}
    abstract public function send(string $event): void;
}

class Buyer extends Party
{
    public function send(string $event): void
    {
        $this->mediator->notify("Buying: {$event}");
    }
}

class Seller extends Party
{
    public function send(string $event): void
    {
        $this->mediator->notify("Selling: {$event}");
    }
}
```

#### Usage:
```php
$mediator = new BookStoreMediator();

$buyer = new Buyer($mediator);
$seller = new Seller($mediator);

$buyer->send("Lord of the Rings");
$seller->send("The Hobbit");
```

#### Output:
```txt
Buying: Lord of the Rings
Selling: The Hobbit
```
