<?php

/*
$a=10;
$b=10;

$a==$b:
result true and == is a opeator this location
*/

// Arithmetic

// $a=20;
// $b=10;

// echo $a+$b;
// echo "<br>";
// echo $a-$b;
// echo "<br>";

// echo $a*$b;
// echo "<br>";

// echo $a/$b;
// echo "<br>";

// echo $a%$b;
// echo "<br>";

// echo $a**$b;
// echo "<br>";
// echo 2**2;

// Assignment Operators
/*                            
$a=10; //Basic assignment
$a+=5; //a=a+5 Addition fast and short other work same method fast and shprt
$a-=3; //a=a-3 
$a*=5; //a=a*5
$a/=4; //a=a/4
$a%=3; //a=a%3
*/

// Comparison Operators
/*

$a==$b; // equal
$a === $b;    // Identical (value and type)
$a != $b;    //not equal
$a <> $b;  // Not equal
$a !== $b; // Not Identical (Value and type)
$a < $b; // a less then b
$a >$b; // a greater then b
$a <= $b; //  less and equal
$a >= $b; //  greater and equal
$a <=> $b; // Spaceship (PHP 7+) //Expression	Result	Meaning
$a <=> $b	-1	Agar $a chhota hai $b se
$a <=> $b	0	Agar dono equal hain
$a <=> $b	1	Agar $a bada hai $b se

// Situation	Example	Use
Numeric comparison	$a <=> $b	Shorter way to check <, =, >
Sorting arrays	usort($arr, fn($x,$y)=>$x<=>$y)	Clean custom sorting
Multi-key sorting	$a['x']<=>$b['x'] ?: $a['y']<=>$b['y']	Advanced sorting
Object comparison	$obj1->compare($obj2)	Domain logic

*/

// Logical Operators
/* 
$a && $b;   // AND (Logical AND) — agar koi ek false hai to result false hota hai
$a and $b;  // AND (same as &&, lekin lower precedence — parentheses me dikkat aa sakti hai)

$a || $b;   // OR (Logical OR) — agar koi ek true hai to result true hota hai
$a or $b;   // OR (same as ||, lekin lower precedence)

!$a;        // NOT (Logical NOT) — agar $a true hai to result false, aur agar $a false hai to result true

$a xor $b;  // XOR (Exclusive OR) — sirf tab true jab $a aur $b me se ek true ho, dono same (true/false) hon to false
*/

// Increment/Decrement Operators                         
/*
$a = 5;

echo ++$a; // Pre-increment: first increases $a (to 6), then prints it → output: 6
echo --$a; // Pre-decrement: first decreases $a (to 5), then prints it → output: 5
echo $a++; // Post-increment: first prints $a (5), then increases it (to 6)
echo $a--; // Post-decrement: first prints $a (6), then decreases it (to 5)
*/

// String Operators
/*$str1 = "Hello";
$str2 = "Tarun";
echo $str1 . " " . $str2; //Concatenation
$str1 .= " PHP";   //Concatenation assignment
echo "<br>";
echo $str1;
*/

// Array Operators
// $a = ["x" => "red", "y" => "green"];
// $b = ["y" => "green", "z" => "blue"];

/*print_r($a+$b); //1️⃣ Union (Combine the both set ya array)Combines both arrays.
   If keys are same, the value from the first array ($a) is kept.*/


// print_r($a==$b); //2️⃣ True if both arrays have the same key/value pairs (order doesn’t matter).

// $a1 = ["x" => "red", "y" => "green"];
// $b1 = ["y" => "green", "x" => "red"];

// var_dump($a1 == $b1);
// Output: bool(true)

// $a === $b;      // Identity
/* 3️⃣  Identity (===)
   True if both arrays have the same key/value pairs *and* in the same order and of the same types.
*/
// $a2 = ["x" => "red", "y" => "green"];
// $b2 = ["y" => "green", "x" => "red"];

// var_dump($a2 === $b2);
// Output: bool(false) — because order is different

// $a != $b;       //4️⃣ Inequality
/* 4️⃣  Inequality (!=)
   True if arrays are *not equal*.
*/
// $a3 = ["x" => "red", "y" => "green"];
// $b3 = ["x" => "red", "y" => "blue"];

// var_dump($a3 != $b3);
// Output: bool(true)

// $a <> $b;       //5️⃣ Inequality
/* 5️⃣  Alternative Inequality (<>)
   Same as != (just another syntax)
*/
// var_dump($a3 <> $b3);
// Output: bool(true)

// $a !== $b;      //6️⃣ Non-identity
/* 6️⃣  Non-identity (!==)
   True if arrays are *not identical* (either different order, keys, or types).
*/
// $a4 = ["x" => "red", "y" => "green"];
// $b4 = ["y" => "green", "x" => "red"];

// var_dump($a4 !== $b4);
// Output: bool(true) — because order is different

//hand Conditional (Ternary) Operator
// $age=20;
// $status =($age >=18)?"Adult":"Minor";
// echo $status;

// Null coalescing (PHP 7+)
// $name = $_GET['name'] ?? 'Anonymous'; //http://localhost/welcome.php?name=Tarun
// echo "Welcome, $name!";

