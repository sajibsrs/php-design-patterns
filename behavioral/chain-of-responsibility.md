# Chain of Responsibility Design Pattern
The Chain of Responsibility Pattern allows a request to be passed along a chain of handlers until one of them processes it.

### How to apply
```php
abstract class Handler
{
    private ?Handler $nextHandler = null;

    public function next(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    // When a handler can not handle the request they'll call this method
    public function handle(string $request): void
    {
        if ($this->nextHandler) {
            echo $this->nextHandler->handle($request);
        } else {
            echo "Invalid request";
        }
    }
}
```

```php
class PurchaseHandler extends Handler
{
    public function handle(string $request): void
    {
        if ($request === 'purchase') {
            echo "Requested to purchase the book";
        } else {
            parent::handle($request);
        }
    }
}

class RentHandler extends Handler
{
    public function handle(string $request): void
    {
        if ($request === 'rent') {
            echo "Requested to rent the book";
        } else {
            parent::handle($request);
        }
    }
}

class GiftHandler extends Handler
{
    public function handle(string $request): void
    {
        if ($request === 'gift') {
            echo "Requested to gift the book";
        } else {
            parent::handle($request);
        }
    }
}
```

#### Usage:
```php
$purchaseRequest = new PurchaseHandler();
$rentRequest = new RentHandler();
$giftRequest = new GiftHandler();

// Set the request handler chain
$purchaseRequest->next($rentRequest)->next($giftRequest);

// Ask the first handler of the chain to handle the request
$purchaseRequest->handle('gift');
$purchaseRequest->handle('remove');
```

#### Output:
```txt
Requested to gift the book
Invalid request
```
