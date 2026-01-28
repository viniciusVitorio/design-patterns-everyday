# Template Method

The **Template Method** pattern defines the skeleton of an algorithm in a base class,
allowing subclasses to implement specific steps without changing the overall structure.

It is used when the **order of steps must remain fixed**, but the implementation of
some steps can vary.

---

## The problem

Many processes follow the same sequence of steps, but differ in details.

For example, payment processing always follows this flow:
1. Validate
2. Process payment
3. Send receipt

Without a shared structure, each implementation may:
- duplicate the same workflow
- change the order of steps
- forget mandatory steps
- introduce subtle bugs

---

## The solution

With **Template Method**, the algorithm is defined once in an abstract class.
Subclasses are only allowed to customize specific steps.

the template:
- defines the fixed order of execution
- cannot be overridden
- guarantees consistency across implementations