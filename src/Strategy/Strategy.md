# Strategy

The **Strategy Pattern** helps you define a family of algorithms, encapsulate each one,
and make them interchangeable.

In practice, it helps to remove **giant business rules concentrated in `if/else` or `switch` blocks**,
which tend to grow over time and make the code harder to maintain.

---

## The problem

Consider the following example:

```php
public function calculate(float $amount, string $taxType): float
{
    return match ($taxType) {
        'IPI'  => $amount * 0.05,
        'ICMS' => $amount * 0.18,
        default => throw new InvalidArgumentException('Tax not supported'),
    };
}
```

Every time a new tax appears, we must modify the calculate method.
This approach violates:

OCP (Open/Closed Principle) — the method is not closed for modification

SRP (Single Responsibility Principle) — the method decides which tax to use and how to calculate it

It also pushes the code toward Primitive Obsession, relying on strings
to represent business rules.

The solution

With Strategy, each tax calculation is extracted into its own class.
Adding a new tax means creating a new class, not changing existing code.

Each tax becomes a business rule, encapsulated and isolated.