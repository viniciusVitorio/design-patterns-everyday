# Builder

The **Builder** pattern separates the construction of a complex object
from its representation, allowing it to be built step by step.

It improves readability and avoids constructors with too many parameters.

---

## The problem

Creating objects with many parameters often leads to unreadable and error-prone code:

```php
$user = new User(
    'Vinicius',
    'vinicius@email.com',
    true,
    true
);
```

As the number of parameters grows:

- constructors become hard to read
- parameter order matters
- many optional values lead to null

## The solution

With Builder, the object is constructed step by step using expressive methods.
Each step configures part of the object, and the final result is created with build().