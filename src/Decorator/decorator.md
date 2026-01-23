# Decorator

The **Decorator** pattern allows behavior to be added to individual objects
dynamically, without modifying their original code or creating subclasses.

It favors **composition over inheritance**, making systems more flexible
and easier to extend.

---

## The problem

Consider a service that performs a simple action:

```php
class NotificationService
{
    public function send(string $message): void
    {
        // send notification
    }
}
```

As the system grows, new responsibilities appear:
- logging
- retries

## The solution

With Decorator, additional behavior is added by wrapping the original
object with decorator classes.

Each decorator:
- implements the same interface as the object
- holds a reference to another object of that interface
- This allows behaviors to be stacked dynamically at runtime.