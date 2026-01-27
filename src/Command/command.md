# Command

The **Command** pattern encapsulates a request as an object,
allowing clients to be parameterized with different actions
and decoupling the sender of a request from its execution.

In practice, it **turns actions into objects**.

---

## The problem

A common approach is handling actions with conditionals:

```php
if ($action === 'save') {
    $service->save();
}

if ($action === 'delete') {
    $service->delete();
}
```

As the system grows:

- conditionals spread across the codebase

- callers need to know implementation details

- adding new actions requires modifying existing code

## The solution

With Command, each action is represented by its own object.
The caller only knows that the action can be executed,
not how it is implemented.

This removes conditionals and keeps responsibilities well separated.