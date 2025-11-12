# **PHP Data Types — From Basic to Advanced**

A complete guide with syntax, examples, explanations, and real-life use cases.

---

## **Introduction to PHP Data Types**

### **What Are Data Types in PHP?**
Data types tell PHP what kind of data a variable holds (text, number, decimal, true/false, etc.).
PHP is **loosely typed**, meaning variables do not need explicit type declarations.

### **Why Data Types Matter**
- **Memory Allocation**: Different types use different amounts of memory
- **Operations**: Certain operations only work with specific types
- **Validation**: Ensures data integrity and prevents errors
- **Performance**: Proper typing can improve execution speed

---

## **Scalar Data Types (Single Value Types)**

### **String Data Type**
A **string** is a sequence of characters inside quotes.

#### **String Syntax**
```php
$name = "Tarun";
$email = 'tarun@example.com';
```

#### **String Real-Life Examples**
```php
// User information
$customerName = "Aarav Sharma";
$customerEmail = "aarav.sharma@email.com";
$address = "123 Main Street, Mumbai";

echo $customerName;    // Output: Aarav Sharma

// Product information
$productTitle = "Wireless Bluetooth Headphones";
$productDescription = "High-quality sound with noise cancellation";

// Messages and notifications
$welcomeMessage = "Welcome to our application!";
$errorMessage = "Invalid password entered";
```

#### **String Operations**
```php
$firstName = "John";
$lastName = "Doe";

// Concatenation
$fullName = $firstName . " " . $lastName;
echo $fullName; // Output: John Doe

// String functions
echo strlen($fullName);    // Length: 8
echo strtoupper($fullName); // Uppercase: JOHN DOE
echo str_replace("John", "Jane", $fullName); // Replace: Jane Doe
```

#### **Check String Data Type**
```php
$customerName = "Aarav Sharma";
var_dump($customerName); // string(12) "Aarav Sharma"
echo is_string($customerName); // 1 (true)
```

---

### **Integer Data Type**
Whole numbers (positive/negative) without decimals.

#### **Integer Syntax**
```php
$age = 25;
$temperature = -5;
$population = 8000000;
```

#### **Integer Real-Life Examples**
```php
// E-commerce applications
$itemsInCart = 5;
$availableStock = 150;
$orderQuantity = 3;

// User data
$userAge = 30;
$loginAttempts = 2;
$yearsOfExperience = 5;

// System metrics
$pageViews = 10457;
$userCount = 2500;
$fileSize = 2048; // in bytes

var_dump($itemsInCart); // int(5)
```

#### **Integer Operations**
```php
$quantity = 10;
$pricePerItem = 25;

// Arithmetic operations
$totalPrice = $quantity * $pricePerItem;
$discountedPrice = $totalPrice - 50;
$average = ($quantity + 20) / 2;

echo $totalPrice; // Output: 250
```

---

### **Float (Double) Data Type**
Numbers with decimal points.

#### **Float Syntax**
```php
$price = 99.99;
$temperature = 36.6;
$exchangeRate = 83.25;
```

#### **Float Real-Life Examples**
```php
// Financial applications
$productPrice = 1999.50;
$discountAmount = 299.75;
$taxRate = 18.5;

// Scientific calculations
$bodyTemperature = 98.6;
$distanceInKm = 15.75;
$weightInKg = 68.5;

// Measurements
$roomTemperature = 23.5;
$fuelEfficiency = 25.8; // km/l
$batteryLevel = 87.5; // percentage

var_dump($productPrice); // float(1999.5)
```

#### **Float Operations**
```php
$subtotal = 1500.75;
$taxRate = 0.18;
$discount = 200.50;

$taxAmount = $subtotal * $taxRate;
$finalAmount = $subtotal + $taxAmount - $discount;

echo number_format($finalAmount, 2); // Output: 1,570.39
```

---

### **Boolean Data Type**
Used for decisions — either **TRUE** or **FALSE**.

#### **Boolean Syntax**
```php
$isLoggedIn = true;
$hasPermission = false;
$isActive = TRUE;
```

#### **Boolean Real-Life Examples**
```php
// User authentication
$isLoggedIn = true;
$isAdmin = false;
$emailVerified = true;

// Feature flags
$newUIFeature = true;
$maintenanceMode = false;
$darkModeEnabled = true;

// Validation states
$isFormValid = false;
$hasAgreedToTerms = true;
$isSubscriptionActive = false;

// Conditional logic
if($isAdmin){
    echo "Welcome Admin - You have full access";
} else {
    echo "Welcome User - Limited access";
}
```

#### **Boolean in Conditions**
```php
$isAuthenticated = true;
$hasValidLicense = false;
$isTrialPeriod = true;

if ($isAuthenticated && $hasValidLicense) {
    echo "Access granted to premium features";
} elseif ($isAuthenticated && $isTrialPeriod) {
    echo "Access granted to trial features";
} else {
    echo "Please authenticate or purchase license";
}
```

---

## **Special Data Types**

### **NULL Data Type**
Represents **no value** or **uninitialized variable**.

#### **NULL Syntax**
```php
$discount = null;
$userAddress = NULL;
$profilePicture = null;
```

#### **NULL Real-Life Examples**
```php
// User profile with optional fields
$userPhone = null;
$middleName = null;
$dateOfBirth = null;

// Application states
$cachedData = null;
$lastSearchQuery = null;
$selectedCategory = null;

// Database records
$deletedAt = null; // Soft delete timestamp
$emailVerifiedAt = null; // Not verified yet
$lastLoginAt = null; // Never logged in

var_dump($userPhone);  // NULL
echo is_null($userPhone); // 1 (true)
```

#### **NULL Checking**
```php
$optionalField = null;

if (is_null($optionalField)) {
    echo "This field is not set";
    $optionalField = "Default Value";
}

// Using null coalescing operator (PHP 7+)
$userName = $optionalField ?? "Guest User";
echo $userName; // Output: Default Value
```

---

## **Compound Data Types**

### **Array Data Type**
An array stores **multiple values** in a single variable.
PHP arrays are **heterogeneous** → can store different types together.

#### **Array Syntax**
```php
// Traditional syntax
$colors = array("Red", "Blue", "Green");

// Short array syntax (PHP 5.4+)
$fruits = ["Apple", "Banana", "Orange"];

// Mixed data types
$mixedArray = ["John", 25, 175.5, true];
```

#### **Array Real-Life Examples**
```php
// Shopping cart items
$cartItems = ["Laptop", "Mouse", "Keyboard", "Monitor"];
$cartQuantities = [1, 2, 1, 1];

// Student information
$student = ["Aarav", 18, "BCA", true, 85.5];
$studentDetails = [
    "name" => "Aarav Sharma",
    "age" => 18,
    "course" => "BCA",
    "active" => true,
    "grade" => 85.5
];

// Configuration settings
$appConfig = [
    "site_name" => "My Application",
    "version" => "2.1.0",
    "debug_mode" => false,
    "max_upload_size" => 5242880
];

var_dump($student);
```

#### **Array Operations**
```php
// Indexed array
$programmingLanguages = ["PHP", "JavaScript", "Python", "Java"];

// Accessing elements
echo $programmingLanguages[0]; // PHP
echo $programmingLanguages[2]; // Python

// Adding elements
$programmingLanguages[] = "C++";
array_push($programmingLanguages, "Ruby");

// Associative array
$user = [
    "id" => 101,
    "username" => "john_doe",
    "email" => "john@example.com",
    "active" => true
];

echo $user["username"]; // john_doe
```

#### **Multi-dimensional Arrays**
```php
$employees = [
    [
        "id" => 1,
        "name" => "Alice Johnson",
        "position" => "Developer",
        "salary" => 75000.00
    ],
    [
        "id" => 2,
        "name" => "Bob Smith",
        "position" => "Designer",
        "salary" => 65000.00
    ],
    [
        "id" => 3,
        "name" => "Carol Davis",
        "position" => "Manager",
        "salary" => 85000.00
    ]
];

// Accessing data
echo $employees[0]["name"]; // Alice Johnson
echo $employees[1]["salary"]; // 65000
```

---

### **Object Data Type**
Objects are created from **classes**.
A class = **blueprint**, Object = **real-world entity**.

#### **Class Syntax**
```php
class Student {
    // Properties
    public $name;
    public $age;
    public $course;
    public $isActive;
    
    // Constructor
    public function __construct($name, $age, $course, $isActive = true) {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
        $this->isActive = $isActive;
    }
    
    // Methods
    public function getInfo() {
        return "{$this->name} - {$this->course} ({$this->age} years)";
    }
    
    public function activate() {
        $this->isActive = true;
    }
    
    public function deactivate() {
        $this->isActive = false;
    }
}
```

#### **Creating Objects**
```php
// Creating object instances
$student1 = new Student("Tarun", 20, "BCA");
$student2 = new Student("Priya", 22, "MCA", false);
$student3 = new Student("Rahul", 21, "B.Tech");

// Accessing properties and methods
echo $student1->name; // Tarun
echo $student1->getInfo(); // Tarun - BCA (20 years)

$student2->activate();
var_dump($student2);
```

#### **Object Real-Life Examples**
```php
class Product {
    public $id;
    public $name;
    public $price;
    public $category;
    public $inStock;
    
    public function __construct($id, $name, $price, $category, $inStock = true) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->inStock = $inStock;
    }
    
    public function applyDiscount($percentage) {
        $discount = $this->price * ($percentage / 100);
        return $this->price - $discount;
    }
    
    public function displayInfo() {
        $status = $this->inStock ? "In Stock" : "Out of Stock";
        return "{$this->name} - ₹{$this->price} ({$status})";
    }
}

// Creating product objects
$laptop = new Product(101, "Gaming Laptop", 89999, "Electronics");
$mouse = new Product(102, "Wireless Mouse", 2499, "Accessories");
$book = new Product(103, "PHP Programming", 899, "Books", false);

echo $laptop->displayInfo(); // Gaming Laptop - ₹89999 (In Stock)
echo $laptop->applyDiscount(10); // 80999.1
```

---

### **Resource Data Type**
A **resource** holds **references to external resources**.
It's not a data type like strings or numbers.

#### **Resource Syntax Examples**
```php
// File resource
$fileHandle = fopen("data.txt", "r");

// Database connection
$databaseConnection = mysqli_connect("localhost", "username", "password", "database");

// cURL resource
$curlHandle = curl_init();

// Image resource
$imageHandle = imagecreate(200, 200);
```

#### **Resource Real-Life Examples**
```php
// File handling
$file = fopen("customer_data.csv", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line . "<br>";
    }
    fclose($file);
}

// Database connection
$connection = mysqli_connect("127.0.0.1", "root", "password", "ecommerce_db");
if ($connection) {
    echo "Database connected successfully";
    mysqli_close($connection);
} else {
    echo "Connection failed: " . mysqli_connect_error();
}

// Image processing
$image = imagecreatefromjpeg("photo.jpg");
if ($image) {
    imagefilter($image, IMG_FILTER_GRAYSCALE);
    imagejpeg($image, "grayscale_photo.jpg");
    imagedestroy($image);
}

var_dump($file); // resource(5) of type (stream)
```

---

## **Type Checking and Debugging**

### **Using `var_dump()` and `gettype()`**
These functions are used to check the **type** and **value** of variables.

#### **Basic Examples**
```php
$num = 10;
$str = "Tarun";
$price = 99.99;
$isActive = true;
$data = null;
$colors = ["Red", "Green", "Blue"];

echo var_dump($num);     // int(10)
echo var_dump($str);     // string(5) "Tarun"
echo var_dump($price);   // float(99.99)
echo var_dump($isActive); // bool(true)
echo var_dump($data);    // NULL
echo var_dump($colors);  // array(3) { ... }

echo gettype($num);      // integer
echo gettype($str);      // string
echo gettype($price);    // double
echo gettype($isActive); // boolean
echo gettype($data);     // NULL
echo gettype($colors);   // array
```

#### **Complete Type Checking Example**
```php
<?php

// Integer
$num = 10;
echo "Integer: ";
var_dump($num);

// String
$str = "Tarun";
echo "<br>String: ";
var_dump($str);

// Float
$price = 99.99;
echo "<br>Float: ";
var_dump($price);

// Boolean
$isLoggedIn = true;
echo "<br>Boolean: ";
var_dump($isLoggedIn);

// Null
$userPhone = null;
echo "<br>Null: ";
var_dump($userPhone);

// Array
$student = ["Tarun", 20, "BCA", true];
echo "<br>Array: ";
var_dump($student);

// Object
class User {
    public $name;
    public $email;
}

$user = new User();
$user->name = "Rahul";
$user->email = "rahul@example.com";

echo "<br>Object: ";
var_dump($user);

// Resource
$connection = ftp_connect("127.0.0.1") or die("Local host not found");
echo "<br>Resource: ";
var_dump($connection);

?>
```

---

## **Type Conversion Methods**

### **Type Juggling (Automatic Conversion)**
PHP automatically converts types when needed in operations.

#### **Type Juggling Examples**
```php
$number = "10";          // string
$result = $number + 5;   // PHP converts "10" to integer
echo $result;            // Output: 15

$text = "Price: " . 99;  // PHP converts 99 to string
echo $text;              // Output: Price: 99

$total = "15.75" * 2;    // PHP converts "15.75" to float
echo $total;             // Output: 31.5

// Boolean context
$value = "Hello";
if ($value) {            // PHP converts to boolean
    echo "This is true"; // Output: This is true
}
```

### **Type Casting (Explicit Conversion)**
Manually convert types using casting.

#### **Type Casting Syntax**
```php
$price = 99.99;
$intPrice = (int)$price;        // Convert to integer
$stringPrice = (string)$price;  // Convert to string
$boolPrice = (bool)$price;      // Convert to boolean
$arrayPrice = (array)$price;    // Convert to array

echo $intPrice;     // Output: 99
```

#### **Complete Type Casting Examples**
```php
// String to other types
$stringValue = "123";
var_dump((int)$stringValue);    // int(123)
var_dump((float)$stringValue);  // float(123.0)
var_dump((bool)$stringValue);   // bool(true)
var_dump((array)$stringValue);  // array(1) { [0]=> string(3) "123" }

// Float to other types
$floatValue = 45.67;
var_dump((int)$floatValue);     // int(45)
var_dump((string)$floatValue);  // string(5) "45.67"
var_dump((bool)$floatValue);    // bool(true)

// Boolean to other types
$boolValue = true;
var_dump((int)$boolValue);      // int(1)
var_dump((string)$boolValue);   // string(1) "1"
var_dump((float)$boolValue);    // float(1)

// Null to other types
$nullValue = null;
var_dump((int)$nullValue);      // int(0)
var_dump((string)$nullValue);   // string(0) ""
var_dump((bool)$nullValue);     // bool(false)
```

#### **Real-World Type Casting Scenarios**
```php
// Form data processing
$userAge = "25"; // From form input (string)
$userAgeInt = (int)$userAge; // Convert to integer for calculations

$productPrice = "1999.99"; // From database (string)
$productPriceFloat = (float)$productPrice; // Convert to float

$isAvailable = "1"; // From API response (string)
$isAvailableBool = (bool)$isAvailable; // Convert to boolean

// Calculations with mixed types
$quantity = "5"; // string
$unitPrice = 199.99; // float

$total = (int)$quantity * $unitPrice; // Explicit conversion
echo "Total: ₹" . number_format($total, 2); // Total: ₹999.95
```

---

## **Type Checking Functions**

### **Complete Type Checking Function Reference**
PHP provides specialized functions to check variable types:

```php
$sampleString = "Hello World";
$sampleInteger = 42;
$sampleFloat = 3.14159;
$sampleBoolean = true;
$sampleArray = [1, 2, 3];
$sampleNull = null;
$sampleObject = new stdClass();

// String checking
var_dump(is_string($sampleString));   // bool(true)
var_dump(is_string($sampleInteger));  // bool(false)

// Integer checking
var_dump(is_int($sampleInteger));     // bool(true)
var_dump(is_integer($sampleInteger)); // bool(true) - alias of is_int
var_dump(is_long($sampleInteger));    // bool(true) - alias of is_int

// Float checking
var_dump(is_float($sampleFloat));     // bool(true)
var_dump(is_double($sampleFloat));    // bool(true) - alias of is_float

// Boolean checking
var_dump(is_bool($sampleBoolean));    // bool(true)

// Array checking
var_dump(is_array($sampleArray));     // bool(true)

// Null checking
var_dump(is_null($sampleNull));       // bool(true)

// Object checking
var_dump(is_object($sampleObject));   // bool(true)

// Numeric checking (int or float)
var_dump(is_numeric($sampleInteger)); // bool(true)
var_dump(is_numeric($sampleFloat));   // bool(true)
var_dump(is_numeric("123"));          // bool(true)
var_dump(is_numeric("123.45"));       // bool(true)

// Scalar checking (string, int, float, bool)
var_dump(is_scalar($sampleString));   // bool(true)
var_dump(is_scalar($sampleArray));    // bool(false)

// Callable checking
var_dump(is_callable('strlen'));      // bool(true)
```

### **Practical Type Checking Examples**
```php
function validateUserInput($input) {
    $errors = [];
    
    if (!is_string($input['name']) || empty(trim($input['name']))) {
        $errors[] = "Name must be a non-empty string";
    }
    
    if (!is_int($input['age']) || $input['age'] < 0 || $input['age'] > 150) {
        $errors[] = "Age must be a valid integer between 0 and 150";
    }
    
    if (!is_numeric($input['salary']) || $input['salary'] < 0) {
        $errors[] = "Salary must be a positive number";
    }
    
    if (!is_bool($input['isActive'])) {
        $errors[] = "Active status must be a boolean value";
    }
    
    return empty($errors) ? true : $errors;
}

// Test data
$userData = [
    'name' => 'John Doe',
    'age' => 30,
    'salary' => 50000.50,
    'isActive' => true
];

$result = validateUserInput($userData);
if ($result === true) {
    echo "All inputs are valid!";
} else {
    echo "Validation errors: " . implode(', ', $result);
}
```

---

## **Advanced Data Types**

### **Callable Type**
A callable can be a function name, object method, or static class method that can be called.

#### **Callable Examples**
```php
// Function callable
function greet($name) {
    return "Hello, $name!";
}

$functionName = 'greet';
echo $functionName('Aarav');  // Output: Hello, Aarav!

// Object method callable
class Greeter {
    public function sayHello($name) {
        return "Hello, $name!";
    }
    
    public static function staticHello($name) {
        return "Static Hello, $name!";
    }
}

$greeter = new Greeter();
$method = [$greeter, 'sayHello'];
echo $method('Neha');  // Output: Hello, Neha!

// Static method callable
$staticMethod = ['Greeter', 'staticHello'];
echo $staticMethod('Rahul');  // Output: Static Hello, Rahul!

// Anonymous function (closure)
$anonymous = function($name) {
    return "Anonymous Hello, $name!";
};
echo $anonymous('Priya');  // Output: Anonymous Hello, Priya!
```

#### **Callable in Real Applications**
```php
// Event system with callbacks
class EventDispatcher {
    private $listeners = [];
    
    public function addListener($event, callable $listener) {
        $this->listeners[$event][] = $listener;
    }
    
    public function dispatch($event, $data = null) {
        if (isset($this->listeners[$event])) {
            foreach ($this->listeners[$event] as $listener) {
                call_user_func($listener, $data);
            }
        }
    }
}

$dispatcher = new EventDispatcher();

// Add listeners
$dispatcher->addListener('user.login', function($user) {
    echo "User {$user} logged in successfully!\n";
});

$dispatcher->addListener('user.logout', function($user) {
    echo "User {$user} logged out!\n";
});

// Dispatch events
$dispatcher->dispatch('user.login', 'john_doe');
$dispatcher->dispatch('user.logout', 'jane_smith');
```

### **Iterable Type**
A pseudo-type that accepts both arrays and objects implementing the Traversable interface.

#### **Iterable Examples**
```php
// Function accepting iterable
function processItems(iterable $items) {
    foreach ($items as $item) {
        echo $item . " ";
    }
    echo "\n";
}

// With array
processItems([1, 2, 3]);  // Output: 1 2 3

// With ArrayIterator
processItems(new ArrayIterator([4, 5, 6])); // Output: 4 5 6

// With generator
function numberGenerator($max) {
    for ($i = 1; $i <= $max; $i++) {
        yield $i;
    }
}

processItems(numberGenerator(3)); // Output: 1 2 3
```

#### **Iterable in Real Applications**
```php
// Data processor that works with various data sources
class DataProcessor {
    public static function processCollection(iterable $collection, callable $processor) {
        $results = [];
        
        foreach ($collection as $key => $value) {
            $results[$key] = call_user_func($processor, $value);
        }
        
        return $results;
    }
}

// Process array data
$numbers = [1, 2, 3, 4, 5];
$squared = DataProcessor::processCollection($numbers, function($n) {
    return $n * $n;
});
print_r($squared); // [1, 4, 9, 16, 25]

// Process object data
$users = new ArrayIterator([
    ['name' => 'Alice', 'age' => 25],
    ['name' => 'Bob', 'age' => 30],
    ['name' => 'Charlie', 'age' => 35]
]);

$adultUsers = DataProcessor::processCollection($users, function($user) {
    return $user['age'] >= 18 ? $user : null;
});
print_r($adultUsers);
```

---

## **Comparison and Best Practices**

### **Strict vs Loose Comparison**
Understanding the difference is crucial for bug-free code.

#### **Comparison Examples**
```php
$number = "10";
$integer = 10;
$zero = 0;
$false = false;
$emptyString = "";

// Loose comparison (==) - checks value only
var_dump($number == $integer);    // bool(true)
var_dump($zero == $false);        // bool(true)
var_dump($emptyString == $false); // bool(true)
var_dump(null == $false);         // bool(false)

// Strict comparison (===) - checks value AND type
var_dump($number === $integer);    // bool(false)
var_dump($zero === $false);        // bool(false)
var_dump($emptyString === $false); // bool(false)
var_dump(null === $false);         // bool(false)

// Real-world scenario
$userInput = "0"; // From form field
$defaultValue = 0;

if ($userInput == $defaultValue) {
    echo "Loose: Values are equal\n"; // This will execute
}

if ($userInput === $defaultValue) {
    echo "Strict: Values are identical\n"; // This won't execute
}
```

### **Type-Safe Function Parameters (PHP 7+)**
Modern PHP allows type declarations for better code reliability.

#### **Type Declarations Examples**
```php
// Scalar type declarations
function calculateTotal(float $price, int $quantity): float {
    return $price * $quantity;
}

$total = calculateTotal(19.99, 3);
echo $total; // 59.97

// Object type declaration
class Order {
    public $items = [];
    
    public function addItem(string $item, float $price) {
        $this->items[] = ['item' => $item, 'price' => $price];
    }
}

function processOrder(Order $order) {
    foreach ($order->items as $item) {
        echo "Processing: {$item['item']} - ₹{$item['price']}\n";
    }
}

$myOrder = new Order();
$myOrder->addItem("Laptop", 89999);
$myOrder->addItem("Mouse", 2499);
processOrder($myOrder);

// Union types (PHP 8.0+)
function displayValue(string|int|float $value): void {
    echo "Value: " . $value . "\n";
}

displayValue("Hello"); // Value: Hello
displayValue(42);      // Value: 42
displayValue(3.14);    // Value: 3.14
```

### **Best Practices Summary**

1. **Use Appropriate Types**
   ```php
   // Good
   $age = 25; // integer
   $price = 19.99; // float
   $name = "John"; // string
   $isActive = true; // boolean
   
   // Avoid
   $age = "25";
   $price = "19.99";
   ```

2. **Validate User Input**
   ```php
   function sanitizeInput($input) {
       if (is_string($input)) {
           return trim(htmlspecialchars($input));
       }
       return $input;
   }
   ```

3. **Be Aware of Type Juggling**
   ```php
   // Understand how PHP converts types
   $result = "5" * "2"; // 10 (integer)
   $result = "5.5" + 2; // 7.5 (float)
   ```

4. **Use Strict Comparisons When Type Matters**
   ```php
   // Database ID comparison
   if ($user->id === (int)$_GET['user_id']) {
       // Safe comparison
   }
   ```

5. **Document Expected Types**
   ```php
   /**
    * Calculate product total
    * @param float $unitPrice
    * @param int $quantity
    * @return float
    */
   function calculateTotal(float $unitPrice, int $quantity): float {
       return $unitPrice * $quantity;
   }
   ```

6. **Use Type Hinting in Modern PHP**
   ```php
   class UserService {
       public function createUser(
           string $name,
           string $email,
           int $age,
           bool $isActive = true
       ): User {
           // Implementation
       }
   }
   ```

---

## **Complete Reference Table**

| Data Type | Description | Example | Type Check Function |
|-----------|-------------|---------|---------------------|
| **String** | Text values | `"Hello"` | `is_string()` |
| **Integer** | Whole numbers | `42` | `is_int()` |
| **Float** | Decimal numbers | `3.14` | `is_float()` |
| **Boolean** | TRUE/FALSE | `true` | `is_bool()` |
| **NULL** | No value | `null` | `is_null()` |
| **Array** | Multiple values | `[1,2,3]` | `is_array()` |
| **Object** | Class instance | `new User()` | `is_object()` |
| **Resource** | External reference | `fopen()` | `is_resource()` |
| **Callable** | Executable code | `'functionName'` | `is_callable()` |
| **Iterable** | Traversable data | `[1,2,3]` | `is_iterable()` |

---

This comprehensive guide covers all PHP data types with extensive examples, real-world use cases, and best practices. The content is organized to help developers understand both basic concepts and advanced features while maintaining code quality and reliability.