# Facade Design Pattern
The Facade design pattern provides a simplified interface to a more complex system, making it easier to use.

### How to use
```php
class Inventory
{
    public function checkAvailability(string $book): bool
    {
        echo "Checking availability of {$book}";
        return true;
    }
}
```

```php
class Payment
{
    public function processPayment(float $amount): bool
    {
        echo "Processing payment of {$amount}";
        return true;
    }
}
```

```php
class Shipping
{
    public function processShipping(string $book): void
    {
        echo "Shipping {$book} to the customer";
    }
}
```

```php
class BookOrderFacade
{
    public function __construct(
        private Inventory $inventory = new Inventory(),
        private Payment $payment = new Payment(),
        private Shipping $shipping = new Shipping()
    ) {}

    public function processOrder(string $book, float $price): void {
        if ($this->inventory->checkAvailability($book)) {
            if ($this->payment->processPayment($price)) {
                $this->shipping->processShipping($book);
                echo "Order completed successfully for {$book}";
            }
        }
    }
}
```

#### Usage:
```php
$orderFacade = new BookOrderFacade();
$orderFacade->processOrder("The lord of the Rings", 15.99);
```

#### Output:
```txt
Checking availability of The lord of the Rings
Processing payment of 15.99
Shipping The lord of the Rings to the customer
Order completed successfully for The lord of the Rings
```
