# Simple Factory

The **Simple Factory** pattern is used to avoid spreading multiple `if` statements across the codebase.
It **centralizes the decision of which class should be instantiated** into a single place: the factory.

---

## The problem

Consider the following example:

```php
public function calculate(float $amount, string $taxType): float
{
    if ($taxType === 'IPI') {
        return $amount * 0.05;
    }

    if ($taxType === 'ICMS') {
        return $amount * 0.18;
    }
}
```

---
This approach becomes a problem when the same decision logic needs to be reused in different methods
or parts of the system.

Each new usage may require duplicating the same conditional logic, making the code harder to maintain.
The solution

With Simple Factory, the conditional logic is moved into a dedicated class, such as TaxFactory.

The factory still contains the if statements, but they are centralized in one place.
This allows the creation logic to be reused wherever needed, keeping the rest of the code clean
and focused on business behavior.

---

## Notes

Simple Factory is not an official GoF pattern.

It is a practical and commonly used solution in real-world projects.

This approach still violates the Open/Closed Principle, since adding a new type requires
modifying the factory.

Even so, it significantly reduces code duplication and improves readability.