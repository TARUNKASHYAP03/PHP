
---

# How PHP Works — A Simple & Clear Guide

A beginner-friendly explanation of how PHP works internally, how requests flow, why PHP code isn’t visible in browsers, and some useful interview questions.
Short, clear, and practical — *focused on learning, not a book.*

---

## 📌 What is PHP?

**PHP (Hypertext Preprocessor)** is a server-side scripting language used to build dynamic web applications.
Unlike HTML, which the browser reads directly, PHP code runs **on the server**, and the output (usually HTML) is sent to the user.

---

## 🚀 How PHP Works (Simple Flow)

Below is the typical lifecycle of a PHP request:

```
[ Browser ] → sends request → [ Web Server (Apache/Nginx) ]
             → passed to →    [ PHP Engine (PHP Interpreter) ]
             → executes code →
             → returns output (HTML/JSON/etc.) →
[ Browser ] displays the final result
```

### ✅ Step-by-step Flow

1. **User visits a PHP page** (like `index.php`).
2. **Web server detects PHP file** and hands the request to the **PHP interpreter**.
3. **PHP executes the script**:

   * Reads PHP code
   * Connects to DB (if needed)
   * Runs logic
   * Builds output (HTML, JSON, XML…)
4. **Server sends the final output to the browser**.
5. **Browser displays the result** — *not the PHP code*.

---

## 🔒 Why You Can’t See PHP Code in the Browser

You cannot see PHP code (like `<?php echo "Hello"; ?>`) in the browser because:

* PHP runs **on the server**
* Only the **output** (HTML/JSON/text) is sent to the browser
* The original PHP code stays **hidden and secure**

Example:

### **PHP Code**

```php
<?php echo "Hello User"; ?>
```

### **Browser Sees**

```html
Hello User
```

✅ This is a security feature, not a problem.
✅ It prevents users from seeing sensitive logic, passwords, queries, etc.

---

## 🧠 PHP Execution Example (Mini Flow)

```php
<?php
$name = "Tarun";
echo "Welcome $name!";
```

**Flow:**

1. Server runs PHP
2. Creats `$name` variable
3. Replaces it in the string
4. Sends browser:

```
Welcome Tarun!
```

---

## 📂 Typical PHP Project Structure

```
project/
│── index.php
│── config.php
│── database/
│── public/
│── templates/
│── src/
```

---

## ✅ Basic → Advanced Concepts (Short & Practical)

### ✅ Basics

* PHP syntax
* Variables & data types
* Arrays
* Loops & conditions
* Functions
* Forms handling
* GET/POST

### ✅ Intermediate

* Sessions & cookies
* File handling
* Error handling
* Working with MySQL (PDO/MySQLi)
* OOP in PHP (classes, objects, inheritance)

### ✅ Advanced

* MVC structure
* Frameworks (Laravel, Symfony)
* APIs (REST)
* Authentication & security
* Composer & package management
* PHP performance optimization

---

## 💡 Common PHP Interview Questions (Simple & Useful)

### **Beginner**

1. What is PHP and why is it called a server-side language?
2. Difference between `echo` and `print`?
3. What are GET and POST methods?
4. How does session differ from cookies?
5. What is `$GLOBALS`, `$_SERVER`, `$_POST`, `$_GET`?

### **Intermediate**

6. What is the difference between `include` and `require`?
7. How do you connect PHP to MySQL?
8. Explain OOP concepts in PHP.
9. What is PDO and why is it better than MySQLi?
10. What is prepared statement and why is it safe?

### **Advanced**

11. Explain MVC architecture.
12. What is dependency injection?
13. What is Composer?
14. How do you secure a PHP application?
15. Difference between PHP-FPM and mod_php?

---

## ✅ Summary

* PHP runs on the **server**, not the browser
* Browser only receives the **final output**, not the PHP code
* PHP is widely used for backend logic, databases, and dynamic websites
* Understanding the **execution flow** is key for debugging and learning

---

