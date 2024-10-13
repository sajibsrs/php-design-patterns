# Command Design Pattern
The Command pattern turns a request into a stand-alone object that contains all the information about the request. This allows to parameterize methods with different requests, delay execution, or queue operations.

### How to apply
```php
// Receiver

class Library
{
    public function add(): void
    {
        echo "Book added";
    }

    public function remove(): void
    {
        echo "Book removed";
    }
}
```

```php
interface Command
{
    public function execute(): void;
}

class AddCommand implements Command
{
    public function __construct(protected Library $library) {}

    public function execute(): void
    {
        $this->library->add();
    }
}

class RemoveCommand implements Command
{
    public function __construct(protected Library $library) {}

    public function execute(): void
    {
        $this->library->remove();
    }
}
```

```php
// Sender

class LibraryAssistant
{
    public function process(Command $command) {
        $command->execute();
    }
}
```

#### Usage:
```php
$library = new Library();

$add = new AddCommand($library);
$remove = new RemoveCommand($library);

$assistant = new LibraryAssistant();
$assistant->process($add);
$assistant->process($remove);
```
#### Output:
```txt
Book added
Book removed
```
