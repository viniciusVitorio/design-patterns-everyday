# Observer

The **Observer** pattern defines a one-to-many dependency between objects,
so that when one object changes state, all its dependents are notified automatically.

It is commonly used to implement **event-driven behavior** without tight coupling.

---

## The problem

Consider a simple object that performs an action:

```php
class Button
{
    public function click(): void
    {
        echo "Button clicked\n";
    }
}
```

As the application grows, new behaviors are needed:

- logging
- analytics
- notifications

A naive solution would be to add these responsibilities directly to the click method,
making the class harder to maintain and extend.

## The solution

With Observer, interested objects subscribe to be notified when an event occurs.

The subject (publisher):

- keeps a list of observers
- does not know concrete implementations
- simply notifies all observers when something happens

Observers (subscribers):

- implement a common interface
- react independently to the event