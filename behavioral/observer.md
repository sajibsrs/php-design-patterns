# Observer Design Pattern
The Observer Pattern defines a one-to-many relationship between objects, where changes in one object (the subject) trigger automatic updates to multiple dependent objects (observers).


### How to apply
```php
interface Observer
{
    public function update(string $event): void;
}

class Customer implements Observer
{
    public function __construct(private string $name) {}

    public function update(string $event): void
    {
        echo "{$this->name} notified: {$event}";
    }
}
```

```php
interface Subject
{
    public function attach(Observer $observer): void;
    public function detach(Observer $observer): void;
    public function notify(string $event): void;
}

class BookStore implements Subject
{
    private array $observers = [];

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        $this->observers = array_filter(
            $this->observers,
            fn($obs) => $obs !== $observer
        );
    }

    public function notify(string $event): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($event);
        }
    }
}
```

#### Usage:
```php
$store = new BookStore();
$store->attach(new Customer("Lucy"));
$store->attach(new Customer("Jonathan"));

$store->notify("New book arrived");
```

#### Output:
```txt
Lucy notified: New book arrived
Jonathan notified: New book arrived
```
