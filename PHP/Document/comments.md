# Comments in PHP

Comments in PHP are non-executable text used to explain code, make notes, temporarily disable code, and improve readability. They are ignored by the PHP parser during execution.

---

## 📋 Table of Contents
- [Types of Comments](#-types-of-comments)
- [Usage Examples](#-usage-examples)
- [Best Practices](#-best-practices)
- [PHPDoc Documentation](#-phpdoc-documentation)
- [Advanced Comment Techniques](#-advanced-comment-techniques)
- [Interview Questions](#-interview-questions)
- [Summary](#-summary)

---

## ✅ Types of Comments

PHP supports 3 main types of comments:

### 1. Single-line Comment (C++ Style)
```php
// This is a single-line comment
echo "Hello"; // This is an inline comment
```

### 2. Single-line Comment (Shell Style)
```php
# This is also a single-line comment
$name = "John"; # Setting user name
```

### 3. Multi-line Comment (C Style)
```php
/*
  This is a multi-line comment
  It can span multiple lines
  Useful for detailed explanations
*/
```

---

## 🚀 Usage Examples

### ✔ Basic Single-line Comments
```php
<?php
// Display welcome message
echo "Welcome to our website!";

# Get user input
$username = $_POST['username'];

// Calculate total price
$total = $price * $quantity; // Price times quantity
?>
```

### ✔ Multi-line Comment Examples
```php
<?php
/*
  File: config.php
  Purpose: Database configuration
  Author: John Doe
  Date: 2024-01-15
*/

/*
  DATABASE CONNECTION SETTINGS
  - Host: localhost
  - Username: root  
  - Password: (to be set in production)
*/
$host = "localhost";
$user = "root";
$pass = "";

/*
  The following function handles:
  1. User authentication
  2. Session management
  3. Error logging
*/
function userLogin() {
    // Function implementation
}
?>
```

### ✔ Commenting for Code Organization
```php
<?php
// =========================================
// DATABASE FUNCTIONS
// =========================================

function connectDB() {
    // Database connection logic
}

// =========================================
// USER MANAGEMENT FUNCTIONS  
// =========================================

function createUser() {
    // User creation logic
}

function deleteUser() {
    // User deletion logic
}
?>
```

### ✔ Temporary Code Disabling
```php
<?php
// $oldValue = calculateOldWay(); // Deprecated method
$newValue = calculateNewWay(); // Use this instead

/*
This code is temporarily disabled for testing
echo "Debug info:";
print_r($data);
die();
*/

// Alternative: use conditional comments
if (false) { // Change to true for debugging
    echo "Debug mode enabled";
    var_dump($variables);
}
?>
```

---

## 💡 Best Practices

### ✅ Good Comments
```php
<?php
// Calculate BMI using formula: weight(kg) / height(m)^2
function calculateBMI($weight, $height) {
    return $weight / ($height * $height);
}

// Validate email format using regex
if (preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
    // Valid email
}

/*
 * Processes payment transaction
 * - Validates card details
 * - Checks available balance
 * - Updates transaction log
 * - Sends confirmation email
 */
function processPayment($amount, $cardDetails) {
    // Implementation
}
?>
```

### ❌ Bad Comments
```php
<?php
// Set x to 5
$x = 5;

// Increment x
$x++;

// Print x
echo $x;

/*
 * Function to add numbers
 */
function add($a, $b) {
    return $a + $b; // Add a and b
}
?>
```

### 🔧 TODO and FIXME Comments
```php
<?php
// TODO: Implement input validation
function getUserData($id) {
    // Current implementation
}

// FIXME: This function has performance issues with large datasets
function generateReport() {
    // Slow implementation
}

// OPTIMIZE: Consider using prepared statements
function queryDatabase($sql) {
    // Current query execution
}

// HACK: Temporary workaround for API limitation  
function fetchData() {
    // Workaround code
}
?>
```

---

## 📚 PHPDoc Documentation

### Function Documentation
```php
<?php
/**
 * Calculates the area of a rectangle
 *
 * @param float $length The length of the rectangle
 * @param float $width The width of the rectangle
 * @return float The calculated area
 * @throws InvalidArgumentException If parameters are not positive numbers
 */
function calculateArea($length, $width) {
    if ($length <= 0 || $width <= 0) {
        throw new InvalidArgumentException("Length and width must be positive");
    }
    return $length * $width;
}
?>
```

### Class Documentation
```php
<?php
/**
 * Represents a user in the system
 *
 * @package Models
 * @author John Doe <john@example.com>
 * @version 1.0
 * @copyright 2024 Company Name
 */
class User {
    /**
     * @var string The user's username
     */
    private $username;
    
    /**
     * @var string The user's email address
     */
    private $email;
    
    /**
     * Creates a new User instance
     *
     * @param string $username
     * @param string $email
     */
    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }
    
    /**
     * Gets the user's username
     *
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }
}
?>
```

### Common PHPDoc Tags
```php
<?php
/**
 * @param type $name Description
 * @return type Description  
 * @throws ExceptionType Description
 * @var type Description
 * @see ClassName::methodName()
 * @since version Description
 * @deprecated version Description
 * @todo Description of future work
 */
?>
```

---

## 🔥 Advanced Comment Techniques

### Conditional Execution for Debugging
```php
<?php
define('DEBUG', true);

// Debug comments that only run in development
if (DEBUG) {
    /*
    echo "Debug Information:\n";
    echo "Memory Usage: " . memory_get_usage() . "\n";
    echo "Execution Time: " . microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"] . "\n";
    */
}

// Alternative using comment toggles
$debug = false; // Set to true for debug output
/*DEBUG_START*/
$debug = true;
/*DEBUG_END*/

if ($debug) {
    // Debug output here
}
?>
```

### API Documentation Example
```php
<?php
/**
 * User API Controller
 *
 * Handles all user-related API endpoints including:
 * - User registration
 * - Profile management  
 * - Authentication
 * - Password reset
 *
 * @apiVersion 1.0.0
 * @apiBaseUrl https://api.example.com/v1
 */
class UserController {
    
    /**
     * Register a new user
     *
     * @api {post} /users/register Create User
     * @apiName CreateUser
     * @apiGroup User
     * @apiVersion 1.0.0
     *
     * @apiParam {String} username User's unique username
     * @apiParam {String} email User's email address
     * @apiParam {String} password User's password (min 8 chars)
     *
     * @apiSuccess {String} id Unique user ID
     * @apiSuccess {String} username User's username
     * @apiSuccess {String} email User's email
     * @apiSuccess {String} createdAt Registration timestamp
     *
     * @apiError {String} error Error message
     * @apiErrorExample {json} Error-Response:
     *     HTTP/1.1 400 Bad Request
     *     {
     *       "error": "Username already exists"
     *     }
     */
    public function register() {
        // Registration logic
    }
}
?>
```

### Configuration Documentation
```php
<?php
/*
|--------------------------------------------------------------------------
| Application Configuration
|--------------------------------------------------------------------------
|
| This file contains the core configuration settings for your application.
| These values are used across the entire system.
|
| Important: Never commit sensitive data to version control!
|
*/

return [
    /*
    |--------------------------------------------------------------------------
    | Database Settings
    |--------------------------------------------------------------------------
    |
    | Here you may specify the database connection settings for your application.
    | Currently supports: mysql, pgsql, sqlite
    |
    */
    'database' => [
        'host' => 'localhost',     // Database server hostname
        'name' => 'myapp',         // Database name
        'user' => 'root',          // Database username
        'pass' => '',              // Database password
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Security Settings  
    |--------------------------------------------------------------------------
    */
    'security' => [
        'encryption_key' => 'your-secret-key', // TODO: Change in production!
        'token_expiry' => 3600, // Session timeout in seconds (1 hour)
    ],
];
?>
```

---

## ❓ Interview Questions

### Basic Level
1. **What are the different types of comments in PHP?**
   - Single-line (`//` and `#`) and multi-line (`/* */`)

2. **What's the difference between `//` and `#` comments?**
   - Functionally identical, just different styles

3. **Can comments affect PHP performance?**
   - No, comments are stripped during parsing

### Intermediate Level
4. **What is PHPDoc and why is it important?**
   - Standardized documentation format for auto-generating documentation

5. **How would you temporarily disable a block of code?**
   - Use multi-line comments or conditional statements

6. **What are some best practices for writing good comments?**
   - Explain why, not what
   - Keep comments updated
   - Use for complex logic only

### Advanced Level
7. **How can comments be used in API documentation?**
   - With PHPDoc and API documentation standards

8. **What's the purpose of annotation comments in frameworks?**
   - For routing, validation, and ORM mappings

9. **How do you handle sensitive information in comments?**
   - Never commit sensitive data; use placeholders

### Practical Questions
10. **Write a PHPDoc comment for a function that calculates factorial**
    ```php
    /**
     * Calculates factorial of a number
     *
     * @param int $number Positive integer
     * @return int|string Factorial result or error message
     * @throws InvalidArgumentException If number is negative
     */
    ```

---

## 📖 Summary

### Key Points
- **Single-line comments**: `//` and `#` for brief notes
- **Multi-line comments**: `/* */` for detailed explanations  
- **PHPDoc**: Standard for documenting code structure
- **Best Use**: Explain complex logic, document APIs, mark TODOs
- **Avoid**: Stating the obvious, outdated comments

### Do's and Don'ts
| Do's | Don'ts |
|------|--------|
| Explain complex algorithms | State the obvious |
| Document function parameters | Write outdated comments |
| Mark temporary code | Commit sensitive information |
| Use consistent style | Over-comment simple code |

### Pro Tips
1. Use comments to separate code sections logically
2. Maintain comment style consistency across projects
3. Regularly review and update comments
4. Use PHPDoc for auto-completion in IDEs
5. Leverage comments for debugging during development

---

## 🔗 Additional Resources

- [PHP Official Documentation](https://www.php.net/manual/en/language.basic-syntax.comments.php)
- [PHPDoc Standards](https://docs.phpdoc.org/3.0/guide/references/phpdoc/index.html)
- [PSR-5: PHPDoc Standard](https://github.com/php-fig/fig-standards/blob/master/proposed/phpdoc.md)

---

*Last updated: 2025*  
*Happy coding! 🚀*