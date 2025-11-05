<?php
echo "How are you";
echo "I am good\n";

print "What is spam\n";
echo "What is spam\n";

// echo can print one or more strings, it does NOT return a value
echo "Hello World\n";          // prints a simple message
echo "I am ", "a student\n";  // prints multiple strings separated by comma

// print can print only one string, BUT it returns 1
print "Hello World\n";         // prints a simple message
$result = print "I am a student\n";  // prints message and returns 1
echo $result."\n";                  // prints 1, because print returned 1

// Using print inside an expression
if (print "Check this\n") {    // prints message, then returns 1 (true)
    echo "This is true\n";     // executes because print returned 1
}
