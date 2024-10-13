# Singleton Design Pattern
The Singleton Pattern ensures that a class has only one instance and provides a global point of access to that instance.

### How to apply
```php
class Singleton
{
    private static ?Singleton $instance = null;

    // Prevent object creation
    private function __construct() {}

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    // Prevent cloning
    private function __clone() {}

    // Prevent serialize
    public function __serialize(): array {
        throw new Exception("Cannot serialize a singleton");
    }

    // Prevent unserialize
    public function __unserialize(array $data): void {
        throw new Exception("Cannot unserialize a singleton");
    }

    public function printInfo(): void
    {
        echo "Singleton instance";
    }
}
```

#### Usage:
```php
$singleton = Singleton::getInstance();
$singleton->printInfo();
```

#### Output:
```txt
Singleton instance
```
