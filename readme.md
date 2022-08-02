# Modern PHP Design Patterns
(PHP version 7.4 or greater)

## # Patterns

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