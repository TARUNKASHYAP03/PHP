# PHP Operators - Complete Guide

## What are Operators?
Operators are symbols that perform operations on variables and values. They are used to perform mathematical, logical, and comparison operations.

## Types of Operators in PHP

### 1. Arithmetic Operators
```php
$a = 10;
$b = 3;

echo $a + $b;  // 13  (Addition)
echo $a - $b;  // 7   (Subtraction)
echo $a * $b;  // 30  (Multiplication)
echo $a / $b;  // 3.33 (Division)
echo $a % $b;  // 1   (Modulus)
echo $a ** $b; // 1000 (Exponentiation)
```

### 2. Assignment Operators
```php
$a = 10;       // Basic assignment
$a += 5;       // $a = $a + 5
$a -= 3;       // $a = $a - 3
$a *= 2;       // $a = $a * 2
$a /= 4;       // $a = $a / 4
$a %= 3;       // $a = $a % 3
```

### 3. Comparison Operators
```php
$a == $b;     // Equal
$a === $b;    // Identical (value and type)
$a != $b;     // Not equal
$a <> $b;     // Not equal
$a !== $b;    // Not identical
$a < $b;      // Less than
$a > $b;      // Greater than
$a <= $b;     // Less than or equal
$a >= $b;     // Greater than or equal
$a <=> $b;    // Spaceship (PHP 7+)
```

### 4. Logical Operators
```php
$a && $b;     // AND
$a and $b;    // AND
$a || $b;     // OR
$a or $b;     // OR
!$a;          // NOT
$a xor $b;    // XOR
```

### 5. Increment/Decrement Operators
```php
$a = 5;
echo ++$a;    // 6 (Pre-increment)
echo $a++;    // 6 (Post-increment)
echo --$a;    // 6 (Pre-decrement)
echo $a--;    // 6 (Post-decrement)
```

### 6. String Operators
```php
$str1 = "Hello";
$str2 = "World";
echo $str1 . " " . $str2;  // Concatenation
$str1 .= " PHP";           // Concatenation assignment
```

### 7. Array Operators
```php
$a + $b;        // Union
$a == $b;       // Equality
$a === $b;      // Identity
$a != $b;       // Inequality
$a <> $b;       // Inequality
$a !== $b;      // Non-identity
```

### 8. Conditional (Ternary) Operator
```php
$age = 20;
$status = ($age >= 18) ? "Adult" : "Minor";
echo $status; // Adult

// Null coalescing (PHP 7+)
$name = $_GET['name'] ?? 'Anonymous';
```

### 9. Type Operators
```php
class MyClass {}
$obj = new MyClass();
var_dump($obj instanceof MyClass); // bool(true)
```

### 10. Execution Operators
```php
$output = `ls -la`;        // Backticks
$output = shell_exec('ls -la');
```

## Interview Questions

### Basic Level
1. **What's the difference between == and ===?**
   ```php
   "5" == 5;   // true (value same)
   "5" === 5;  // false (type different)
   ```

2. **What does the spaceship operator do?**
   ```php
   echo 5 <=> 3;  // 1  (left > right)
   echo 3 <=> 5;  // -1 (left < right)
   echo 5 <=> 5;  // 0  (equal)
   ```

3. **Explain increment operators:**
   ```php
   $a = 5;
   echo $a++; // 5 (returns then increments)
   echo ++$a; // 7 (increments then returns)
   ```

### Intermediate Level
4. **Null coalescing vs ternary:**
   ```php
   // Ternary
   $value = isset($data) ? $data : 'default';
   
   // Null coalescing
   $value = $data ?? 'default';
   
   // Null coalescing chain (PHP 7.4+)
   $value = $a ?? $b ?? $c ?? 'default';
   ```

5. **Operator precedence example:**
   ```php
   $result = 2 + 3 * 4;     // 14 (not 20)
   $result = (2 + 3) * 4;   // 20
   ```

6. **Logical operator precedence:**
   ```php
   $a = false && true;   // false (&& higher precedence)
   $b = false and true;  // false (but and lower precedence)
   ```

### Advanced Level
7. **Bitwise operators:**
   ```php
   echo 5 & 3;   // 1  (0101 & 0011 = 0001)
   echo 5 | 3;   // 7  (0101 | 0011 = 0111)
   echo 5 ^ 3;   // 6  (0101 ^ 0011 = 0110)
   echo ~5;      // -6 (bitwise not)
   echo 5 << 1;  // 10 (shift left)
   echo 5 >> 1;  // 2  (shift right)
   ```

8. **Type juggling with operators:**
   ```php
   $a = "5";
   $b = 2;
   echo $a + $b;    // 7 (string to int)
   echo $a . $b;    // "52" (concatenation)
   ```

9. **Error control operator:**
   ```php
   $file = @file('non_existent.txt'); // Suppresses error
   ```

10. **Assignment with reference:**
    ```php
    $a = 5;
    $b = &$a;    // $b is reference to $a
    $b = 10;
    echo $a;     // 10
    ```

## Important Notes
- **Operator Precedence** determines which operations are performed first
- **Associativity** determines order when operators have same precedence
- **Type Juggling** automatically converts types in operations
- Use parentheses to clarify complex expressions
