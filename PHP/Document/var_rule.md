
---

# 📘 PHP Variables — Complete Guide (Simple & Clear)

This guide explains PHP variable rules with clean examples and outputs.
Everything is beginner-friendly and easy to revise.

---

## ✅ What is a Variable in PHP?

A **variable** stores data that can be used later in the program.

Example:

```php
$name = "Tarun";
```

---

## ✅ Rules for PHP Variable Names

### 1️⃣ Every variable must start with `$`

```php
$name = "Tarun";   // ✅ Correct
```

---

### 2️⃣ A variable **cannot start with a number**

```php
$name1 = "Tarun";   // ✅ Valid
$1name = "Tarun";   // ❌ Invalid
```

---

### 3️⃣ A variable **cannot start with a special symbol**

Only underscore `_` is allowed at the beginning.

```php
$_name = "Anuj";   // ✅ Valid
$@name = "Test";   // ❌ Invalid
```

---

### 4️⃣ A variable can contain **letters, numbers, and underscores**

✅ Valid names:

* `$name`
* `$user_name`
* `$age1`

❌ Invalid names:

* `$user-name`
* `$first name`

---

### 5️⃣ PHP variables are **case-sensitive**

These are all different:

```php
$name
$Name
$NAME
```

---

## ✅ Example Code

```php
$name="Tarun";
$_name="Anuj";
$Name="Priya";
$NAME="Kajal";

echo $name."<br>".$_name."<br>".$Name."<br>".$NAME;

$yes="Hello";
$YES="Hello";
$Yes="Hello";

echo "<br>";

if ($yes==$YES)
    echo "Ha";
else
    echo "Na";
```

---

## ✅ Output of the Code

```
Tarun
Anuj
Priya
Kajal
Ha
```

(“Ha” comes because `$yes` and `$YES` have the same values.)

---

## ✅ Quick Summary

| Rule             | Description                                 |
| ---------------- | ------------------------------------------- |
| `$`              | Variable must start with `$`                |
| No Numbers First | Cannot start with digits                    |
| Allowed Symbol   | Only `_` allowed at beginning               |
| Characters       | Letters, digits, underscores                |
| Case Sensitive   | `$name`, `$Name`, `$NAME` are all different |

---

## ✅ Practice Questions

### Q1: Which of these are valid?

* `$firstName` ✅
* `$First-Name` ❌
* `$1stUser` ❌
* `$_user_id` ✅

### Q2: What will this print?

```php
$A = "Hi";
$a = "Hello";

echo $A." ".$a;
```

✅ **Output:**

```
Hi Hello
```

---
