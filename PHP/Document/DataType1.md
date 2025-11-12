
---

# **PHP Data Types — From Basic to Advanced**

A complete guide with syntax, examples, explanations, and real-life use cases.

---

## ✅ **What Are Data Types in PHP?**

Data types tell PHP what kind of data a variable holds (text, number, decimal, true/false, etc.).
PHP is **loosely typed**, meaning variables do not need explicit type declarations.

---

## ✅ **1. String**

A **string** is a sequence of characters inside quotes.

### ✅ Syntax

```php
$name = "Tarun";
```

### ✅ Example (Real Life)

Think of a user’s **name or email** — always stored as string.

```php
$customerName = "Aarav Sharma";
echo $customerName;    // Output: Aarav Sharma
```

### ✅ Check Data Type

```php
var_dump($customerName);
```

---

## ✅ **2. Integer (int)**

Whole numbers (positive/negative) without decimals.

### ✅ Syntax

```php
$age = 25;
```

### ✅ Real-Life Example

Used for **age, quantity, number of items in cart**, etc.

```php
$itemsInCart = 5;
var_dump($itemsInCart);
```

---

## ✅ **3. Float (double)**

Numbers with decimal points.

### ✅ Syntax

```php
$price = 99.99;
```

### ✅ Real-Life Example

Used for **product price, distance, weight**, etc.

```php
$productPrice = 1999.50;
var_dump($productPrice);
```

---

## ✅ **4. Boolean**

Used for decisions — either **TRUE** or **FALSE**.

### ✅ Syntax

```php
$isLoggedIn = true;
```

### ✅ Real-Life Example

Login systems, button states, feature toggles, etc.

```php
$isAdmin = false;

if($isAdmin){
    echo "Welcome Admin";
} else {
    echo "Access denied";
}
```

---

## ✅ **5. NULL**

Represents **no value**.

### ✅ Syntax

```php
$discount = null;
```

### ✅ Real-Life Example

User has not provided **address**, **profile photo**, etc.

```php
$userPhone = null;
var_dump($userPhone);  // NULL
```

---

## ✅ **6. Array**

An array stores **multiple values** in a single variable.
PHP arrays are **heterogeneous** → can store different types together.

### ✅ Syntax

```php
$colors = array("Red", "Blue", "Green");
```

### ✅ Real-Life Example

Shopping cart items, list of students, etc.

```php
$student = ["Aarav", 18, "BCA", true];
var_dump($student);
```

---

## ✅ **7. Object**

Objects are created from **classes**.
A class = **blueprint**, Object = **real-world entity**.

### ✅ Syntax (Class)

```php
class Student {
    public $name;
    public $age;
}
```

### ✅ Creating an Object

```php
$stu = new Student();
$stu->name = "Tarun";
$stu->age = 20;

var_dump($stu);
```

### ✅ Real-Life Example

A student record, product, car, user profile, etc.

---

## ✅ **8. Resource**

A **resource** is not a data type like strings or numbers.
It holds **references to external resources** such as:

* Database connections
* File handles
* FTP connections
* cURL handles

### ✅ Syntax

```php
$connection = ftp_connect("127.0.0.1") or die("Local host not found");
```

### ✅ Real-Life Example

Connecting to an FTP server, MySQL database, reading a file, etc.

---

## ✅ **Using `var_dump()`**

`var_dump()` is used to check the **type** and **value** of a variable.

### ✅ Example

```php
$num = 10;
var_dump($num);

$str = "Tarun";
var_dump($str);
```

---

## ✅ **Full Example Code (Basic to Advanced)**

```php
<?php

// Integer
$num = 10;
echo var_dump($num);

// String
$str = "Tarun";
echo "<br>";
echo var_dump($str);

// Float
$price = 99.99;
echo "<br>";
var_dump($price);

// Boolean
$isLoggedIn = true;
echo "<br>";
var_dump($isLoggedIn);

// Null
$userPhone = null;
echo "<br>";
var_dump($userPhone);

// Array
$student = ["Tarun", 20, "BCA", true];
echo "<br>";
var_dump($student);

// Object
class User {
    public $name;
    public $email;
}

$user = new User();
$user->name = "Rahul";
$user->email = "rahul@example.com";

echo "<br>";
var_dump($user);

// Resource
$connection = ftp_connect("127.0.0.1") or die("Local host not found");
echo "<br>";
var_dump($connection);

?>
```

---

## ✅ **Summary Table**

| Data Type | Description                 | Example        |
| --------- | --------------------------- | -------------- |
| String    | Text values                 | `"Hello"`      |
| Integer   | Whole numbers               | `10`           |
| Float     | Decimal numbers             | `10.5`         |
| Boolean   | TRUE/FALSE                  | `true`         |
| NULL      | Empty value                 | `null`         |
| Array     | Multiple values             | `[1,2,3]`      |
| Object    | Instance of a class         | `new User()`   |
| Resource  | External resource reference | FTP connection |

---

✅ **Markdown lint issues solved:**

* **MD041** → File now starts with H1
* **MD024** → No duplicate headings remain

---

