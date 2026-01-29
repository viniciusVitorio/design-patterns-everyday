# Chain of Responsibility

The **Chain of Responsibility** pattern allows a request to be passed along
a chain of handlers, where each handler decides whether to process the request
or pass it to the next one.

This avoids coupling the sender of a request to its receiver.

---

## The problem

Handling multiple conditions often leads to large `if/else` or `switch` blocks:

```php
if ($role === 'admin') {
    // handle admin
} elseif ($role === 'user') {
    // handle user
}
```

As the number of rules grows:

- conditionals become hard to maintain
- adding new rules requires modifying existing code

## The solution

With Chain of Responsibility, each rule is encapsulated in its own handler.
Handlers are linked together, forming a chain.

Each handler:
- tries to process the request
- passes it to the next handler if it cannot handle it