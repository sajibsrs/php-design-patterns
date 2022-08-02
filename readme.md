# # Modern PHP Design Patterns
(PHP version 7.4 or greater)

## # Intention
The intention is to simplify the ideas of different design patterns. The code examples are 
overly simplified. These examples only focuses on what's important and additional operations kept to as minimal as possible.

## # Patterns
Example uses of design patterns can be found in `index.php` in the root directory. You can either run it 
from terminal or built-in php server.

Run from terminal:
```console
php index.php
```

Run built-in server:
```console
php -S localhost:8000
```

### # Creational
* **Factory method**
* **Abstract factory**
* **Builder**
* *Prototype*
* **Singleton**

### # Structural
* **Adapter**
* *Bridge*
* **Composite**
* **Decorator**
* **Facade**
* *Flyweight*
* **Proxy**

### # Behavioral
* **Chain of responsibility**
* *Command*
* **Iterator**
* *Mediator*
* *Memento*
* **Observer**
* *State*
* **Strategy**
* **Template method**
* *Visitor*

## Testing
Run command on project root directory:

#### # Run tests
```console
./vendor/bin/phpunit --testdox --color=always
```

#### # Code coverage
```console
XDEBUG_MODE=coverage ./vendor/bin/phpunit --coverage-text --color=always
```