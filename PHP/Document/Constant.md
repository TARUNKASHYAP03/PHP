
---

# 📘 PHP Constants — Complete Guide (Beginner to Advanced)

PHP **constants** store values that **never change** during the execution of a program.
They are used for fixed data such as API keys, database credentials, company names, etc.

---

# ✅ What is a Constant?

A **constant** is like a variable, but:

✅ It does **not** use `$`
✅ It **cannot be changed**
✅ It is used for **fixed values**
✅ It can be accessed **anywhere** in the script
✅ It is usually written in **UPPERCASE** (recommended)

Example:

```php
const NAME = "Tarun";
```

---

# ✅ Why Use Constants?

Use constants when the value must stay the same, such as:

* Website name
* Database name
* API Keys
* Version number
* Author name
* Company name

Example:

```php
const SITE_NAME = "MyWebsite";
const VERSION = "1.0.0";
```

---

# ✅ How to Define Constants in PHP?

PHP supports **two methods** to define constants:

---

# ✅ ✅ Method 1: Using `const`

(Recommended, clean, faster)

```php
const NAME = "Tarun";
const AGE = 24;

echo NAME;
```

✅ Works inside classes
✅ Faster because resolved at compile-time
❌ Cannot be used inside functions with conditions

---

# ✅ ✅ Method 2: Using `define()`

(Most flexible)

```php
define("DATA", "Tarun Kumar");

echo DATA;
```

✅ Works everywhere
✅ Can be created conditionally
✅ Can use dynamic values
❌ Slightly slower than `const`

---

# ✅ Output Example

Given code:

```php
define('data', 'Tarun Kumar');

echo data;
```

Output:

```
Tarun Kumar
```

---

# ✅ Rules of Constants

### ✅ 1. Constants do NOT use `$`

❌ Wrong:

```php
$data = "Hello";  // This is variable, NOT constant
```

✅ Correct:

```php
define("DATA", "Hello");
```

---

### ✅ 2. Constants are Case-Sensitive

```php
define("NAME", "Tarun");

echo NAME;   // ✅ Tarun
echo name;   // ❌ Undefined constant
```

🔥 If you want case-insensitive constants (rare), use:

```php
define("DATA", "Hello", true); // third parameter true = case-insensitive
```

---

### ✅ 3. Constant values cannot be changed

```php
define("PI", 3.14);
PI = 3.15;   // ❌ Error
```

---

### ✅ 4. Can store any datatype

```php
const A = "Hello";
const B = 125;
const C = true;
const D = ["php","mysql","js"];
```

---

# ✅ Magic Constants (Advanced but simple)

PHP provides **predefined constants** that automatically change based on the script location.

| Constant       | Description                   |
| -------------- | ----------------------------- |
| `__FILE__`     | Full path of the current file |
| `__DIR__`      | Directory of the file         |
| `__LINE__`     | Current line number           |
| `__FUNCTION__` | Current function name         |
| `__CLASS__`    | Current class name            |
| `__METHOD__`   | Current method name           |

Example:

```php
echo __FILE__;
```

Output:

```
C:/xampp/htdocs/project/index.php
```

---

# ✅ Advanced: Constant Arrays

PHP allows **array constants** (from PHP 5.6+):

```php
const USERS = ["Tarun", "Anuj", "Priya"];

echo USERS[1];   // Output: Anuj
```

---

# ✅ Advanced: Constants inside Classes (OOP)

```php
class Test {
    const PI = 3.14;
}

echo Test::PI;
```

---

# ✅ Final Code Summary (Your Provided Code)

```php
define('data', 'Tarun Kumar');

echo data;

/*
-> constant does not use $ like variables
-> constants are case sensitive
*/
```

✅ Output:

```
Tarun Kumar
```

---

# ✅ Quick Revision Table

| Feature         | Variable            | Constant              |
| --------------- | ------------------- | --------------------- |
| Starts with `$` | ✅ Yes               | ❌ No                  |
| Change value    | ✅ Yes               | ❌ No                  |
| Case Sensitive  | ✅ Yes               | ✅ Yes                 |
| Created with    | `$var = ""`         | `const` or `define()` |
| Global Access   | ❌ No (needs global) | ✅ Yes                 |

---

# ✅ Example Uses in Real Projects

### ✅ Website settings

```php
const SITE_NAME = "MyTechBlog";
const COPYRIGHT = "© 2025 All Rights Reserved";
```

### ✅ Database connection

```php
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
```

### ✅ Version info

```php
const VERSION = "2.5.1";
```

---

# ✅ Practice Questions

### **Q1:** Which is valid?

```
1. define("name", "Tarun");
2. const name = "Tarun";
3. const NAME = "Tarun";
4. define(NAME, "Tarun");
```

✅ Correct: **1 and 3**

---

### **Q2:** What will be the output?

```php
define("A", 10);
define("B", 20);

echo A + B;
```

✅ Output:

```
30
```

---
