<!-- markdownlint-disable MD041 -->
---
<!-- markdownlint-enable MD041 -->

# 📘 PHP echo & print — Complete Guide (Beginner → Advanced + Interview Ready)

`echo` and `print` are the most commonly used output statements in PHP.
This guide explains everything from basics to advanced usage so you never need another explanation.

---

## ✅ 1. What is `echo` in PHP

`echo` is a **language construct** used to display output on the web page.

✅ Fast  
✅ Can print multiple values  
✅ Most commonly used  
❌ Does not return any value

### Example

```php
echo "Hello World";
````

---

## ✅ 2. What is `print` in PHP

`print` is also a **language construct** but:

✅ Can be used in expressions
✅ Returns `1`
❌ Slightly slower than echo
❌ Can print only one string at a time

### Example1

```php
print "Hello World";
```

---

## ✅ 3. Difference Between echo & print

| Feature            | echo        | print           |
| ------------------ | ----------- | --------------- |
| Speed              | Faster      | Slightly slower |
| Return Value       | ❌ No        | ✅ Returns 1     |
| Multiple Arguments | ✅ Yes       | ❌ No            |
| Common Use         | Very common | Less common     |
| Use in Expressions | ❌ No        | ✅ Yes           |

---

## ✅ 4. Syntax of `echo`

```php
echo "Hello";
echo ("Hello");
echo "Hello", " World";   // multiple outputs
```

✅ Both with or without parentheses
✅ Can print multiple strings when separated by commas

---

## ✅ 5. Syntax of `print`

```php
print "Hello";
print("Hello");
```

❌ Cannot print multiple strings:

```php
print "Hello","World";   // ❌ Error
```

✅ Can be used in expressions:

```php
if (print("Hello")) {
    echo " Printed";
}
```

### Output

```text
Hello Printed
```

---

## ✅ 6. Printing Variables

```php
$name = "Tarun";

echo $name;
print $name;
```

---

## ✅ 7. HTML with echo/print

```php
echo "<h1>Welcome</h1>";
echo "<p>This is PHP.</p>";
```

---

## ✅ 8. echo with Concatenation

```php
$name = "Tarun";
echo "My name is " . $name;
```

---

## ✅ 9. echo with Comma vs Dot

✅ `echo` can use commas:

```php
echo "Hello ", "World";
```

✅ `print` must use `.`:

```php
print "Hello " . "World";
```

---

## ✅ 10. Multiline echo/print

```php
echo "Line 1<br>
Line 2<br>
Line 3";
```

---

## ✅ 11. echo with Variables + HTML

```php
$age = 21;
echo "<p>Your age is <b>$age</b></p>";
```

---

## ✅ 12. echo with escaping quotes

```php
echo "He said \"Hello\"";
```

---

## ✅ 13. echo with heredoc (Advanced)

```php
echo <<<TEXT
Hello, this is multi-line text.
You don't need quotes.
TEXT;
```

---

## ✅ 14. echo with nowdoc (Advanced)

```php
echo <<<'TEXT'
This is raw text. Variables like $name won't expand.
TEXT;
```

---

## ✅ 15. echo inside PHP + HTML page

```php
<!DOCTYPE html>
<html>
<body>

<?php echo "Hello HTML + PHP"; ?>

</body>
</html>
```

---

## ✅ 16. Output Arrays (Common Interview Trick)

❌ Wrong

```php
echo $arr;  // Warning: Array to string conversion
```

✅ Correct

```php
print_r($arr);
var_dump($arr);  // most detailed
```

---

## ✅ 17. echo vs print vs print_r vs var_dump

| Function   | Purpose                                   |
| ---------- | ----------------------------------------- |
| `echo`     | Output text                               |
| `print`    | Output text + returns 1                   |
| `print_r`  | Print array/object (readable)             |
| `var_dump` | Shows type, length, structure (debugging) |

---

## ✅ 18. echo with Backticks (Common Mistake)

❌ Backticks do NOT output text

```php
`echo hello`;   // This runs shell commands, NOT php echo
```

---

## ✅ 19. echo in short tags (Advanced)

```php
<?= "Hello World"; ?>
```

Equivalent to:

```php
<?php echo "Hello World"; ?>
```

---

## ✅ 20. echo in Loops

```php
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}
```

---

## ✅ 21. echo in Functions

```php
function show() {
    echo "Inside function";
}

show();
```

---

## ✅ 22. echo JSON (Common API usage)

```php
$data = ["name" => "Tarun"];
echo json_encode($data);
```

---

## ✅ 23. echo using ternary operator

```php
echo ($age >= 18) ? "Adult" : "Minor";
```

---

## ✅ 24. echo Buffering (Advanced: Interview)

```php
ob_start();
echo "Hello";
$output = ob_get_clean();
```

Useful for:

* modifying output before sending
* template engines
* compression

---

## ✅ 25. Performance Comparison

✅ `echo` is slightly faster
✅ `print` is slower because it returns `1`

But difference is extremely small.

---

## ✅ Interview Questions (100% Common)

### Q1 Difference between echo and print

* echo is faster
* echo has no return
* echo can print multiple arguments
* print returns 1
* print can print only one string

### Q2 Can echo print multiple strings

✅ Yes

```php
echo "A","B","C";
```

### Q3 Which one returns a value

✅ print returns **1**

### Q4 Can print be used in expressions

✅ Yes

```php
if (print "Hi") {}
```

### Q5 Which is faster

✅ echo

### Q6 echo vs print_r

* echo prints simple text
* print_r prints arrays & objects

### Q7 echo vs var_dump

* echo: simple output
* var_dump: type + length + structure

### Q8 What is `<?= ?>`

Short echo tag.

### Q9 How to print a multi-line string

Use Heredoc or string with line breaks.

### Q10 Can echo return a value

❌ No.

---

## ✅ Practice Questions

### Q1 What will be the output

```php
echo "10" + 5;
```

✅ Output

```text
15
```

### Q2 Practice

```php
print "Hello" . print("World");
```

✅ Output

```text
World1Hello1
```

### Q3 Practice

```php
echo "A","B",5;
```

✅ Output

```text
AB5
```

### Q4 Practice

```php
if (print "PHP") {
    echo " TRUE";
}
```

✅ Output

```text
PHP TRUE
```

---

## ✅ Final Summary

| Topic             | echo   | print           |
| ----------------- | ------ | --------------- |
| Speed             | ✅ Fast | ❌ Slightly Slow |
| Return Value      | ❌ No   | ✅ Yes (1)       |
| Multiple Values   | ✅ Yes  | ❌ No            |
| Use in Expression | ❌ No   | ✅ Yes           |
| Most Used         | ✅ echo |                 |

---
---
