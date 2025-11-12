# How PHP Works: From Code to Browser

## 🎯 Overview
PHP is a **server-side scripting language** that executes on the web server before the page is sent to the browser.

## 🔄 PHP Execution Flow

### 1. Request-Response Cycle
```
User Request → Web Server → PHP Interpreter → Response → Browser
```

### 2. Detailed Flow

#### **Step 1: User Makes Request**
```http
GET /index.php HTTP/1.1
Host: example.com
```

#### **Step 2: Web Server Receives Request**
- Apache/Nginx identifies `.php` extension
- Routes request to PHP interpreter

#### **Step 3: PHP Interpreter Executes**
```php
<?php
// This runs on SERVER
echo "<h1>Hello World</h1>";
?>
```

#### **Step 4: Output Sent to Browser**
```html
<!-- Browser receives ONLY this -->
<h1>Hello World</h1>
```

## ❓ Why Can't You See PHP Code in Browser?

### 🔒 Server-Side Execution
```php
<?php
$secret = "This is hidden";
echo "Visible text";
?>
```

**Browser Sees:**
```html
Visible text
```

**Reason:** PHP code is **executed and stripped** on the server before sending HTML to client.

## 🏗️ PHP Architecture

### Components:
1. **Web Server** (Apache/Nginx)
2. **PHP Parser/Interpreter**
3. **Zend Engine** (compiles to opcodes)
4. **Extensions** (database, encryption, etc.)

### Processing Steps:
1. **Tokenization** - Break code into tokens
2. **Parsing** - Create Abstract Syntax Tree
3. **Compilation** - Generate opcodes
4. **Execution** - Run opcodes
5. **Output** - Send result to web server

## 💻 Basic to Advanced Examples

### Level 1: Basic Output
```php
<?php
// Simple output
echo "Hello World";

// Variables
$name = "John";
echo "Hello $name";
?>
```

### Level 2: Conditional Logic
```php
<?php
$user_logged_in = true;

if ($user_logged_in) {
    echo "Welcome back!";
} else {
    echo "Please log in";
}
?>
```

### Level 3: Database Interaction
```php
<?php
// Connect to database
$conn = mysqli_connect("localhost", "user", "pass", "db");

// Query database
$result = mysqli_query($conn, "SELECT * FROM users");

// Process results
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['username'];
}
?>
```

### Level 4: Object-Oriented PHP
```php
<?php
class User {
    private $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function greet() {
        return "Hello, " . $this->name;
    }
}

$user = new User("Alice");
echo $user->greet();
?>
```

## 🚀 Advanced Concepts

### 1. PHP-FPM (FastCGI Process Manager)
- Handles PHP requests efficiently
- Process management
- Better performance

### 2. Opcode Caching (OPcache)
- Stores compiled PHP code
- Reduces execution time
- Essential for production

### 3. Session Handling
```php
<?php
session_start();
$_SESSION['user_id'] = 123; // Stored on server
?>
```

## 📊 PHP vs Client-Side Languages

| Aspect | PHP (Server) | JavaScript (Client) |
|--------|-------------|-------------------|
| Execution | Server | Browser |
| Code Visibility | Hidden | Visible |
| Database Access | Direct | API Calls |
| File System Access | Yes | No |

## 🎯 Common Interview Questions

### Beginner Level
1. **Why can't I see PHP code in browser?**
   - PHP executes on server, only HTML is sent to browser

2. **What's the difference between echo and print?**
   - Both output text, but echo is slightly faster and can take multiple parameters

3. **How do you start a PHP session?**
   - `session_start()` at the beginning of script

### Intermediate Level
4. **Explain PHP's superglobal arrays**
   - `$_GET`, `$_POST`, `$_SESSION`, `$_SERVER`, etc.

5. **What is PHP.ini file?**
   - Configuration file that controls PHP behavior

6. **How does PHP handle forms?**
   - Through `$_GET` and `$_POST` superglobals

### Advanced Level
7. **Explain PHP's execution process**
   - Tokenization → Parsing → Compilation → Execution

8. **What is OPcache and why use it?**
   - Caches compiled bytecode for better performance

9. **How does PHP interact with databases?**
   - Extensions like mysqli, PDO with prepared statements

## 🔧 Quick Setup Check

### Verify PHP Installation
```bash
php -v
```

### Create Test File
```php
<?php
phpinfo();
?>
```
Access via browser to see PHP configuration.

## 📝 Key Takeaways

- ✅ **PHP runs on server** - code never reaches browser
- ✅ **Output is HTML** - that's what browser receives  
- ✅ **Stateless by default** - uses sessions for state management
- ✅ **Extensible** - through extensions and frameworks
- ✅ **Cross-platform** - runs on Windows, Linux, macOS

## 🎓 Learning Path

1. **Start with**: Basic syntax, forms, sessions
2. **Move to**: Database integration, OOP
3. **Advanced**: Performance, security, frameworks
4. **Expert**: Architecture, extensions, optimization

---

*Remember: PHP makes the magic happen behind the scenes! 🎩✨*