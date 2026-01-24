# Adapter

The **Adapter** pattern allows classes with incompatible interfaces to work together.
It acts as a **translator** between your domain code and external or legacy libraries.

---

## The problem

Imagine your system needs to generate PDFs.

Your business rule expects a method called `generate`, but the external library you are using
exposes a different interface:

```php
class PDFLib
{
    public function criaPdf(): void
    {
        // generate pdf
    }
}
```

If your business code depends directly on this library, changing it in the future
would require modifying existing classes, violating SOLID principles.

## The solution

With Adapter, you introduce an intermediate layer that translates the interface
of the external library into the interface expected by your system.

Your business code depends only on an abstraction.