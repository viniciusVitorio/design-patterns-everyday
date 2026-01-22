# Factory 

The **Factory Method** pattern defines an interface for creating objects,
but lets subclasses decide which class to instantiate.

---

## The problem

Using a **Simple Factory**, object creation is centralized, but still relies
on conditional logic:

```php
return match ($type) {
    'IPI'  => new Ipi(),
    'ICMS' => new Icms(),
};
```
Although this approach is practical, it still violates the Open/Closed Principle.
Every time a new type is added, the factory must be modified.

## The solution

With Factory Method, the responsibility of object creation is moved to
subclasses.

Each factory knows how to create one specific type, and new types can be
added by extending the system, not by modifying existing code.