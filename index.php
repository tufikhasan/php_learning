<?php
/*
PHP variable mutable:
In PHP, a variable is considered mutable if its value can be changed or altered after it has been initially assigned. This means that the value stored in the variable can be modified or reassigned at any point during the execution of a program. For example, the value of a mutable variable can be changed through assignment statements, increment/decrement operations, or by being passed as an argument to a function that modifies its value.
*/
$firstName = "Tufik";
echo $firstName;
echo "\n";
$firstName = "Towfik hasan";
echo $firstName,"\n";



$a = 5;  // initial assignment
$a = 10; // reassigning the value of $a
echo $a,"\n";

$b = 7;
$b += 3; // changing the value of $b by incrementing it
echo $b,"\n";

$c = 20;
$c--;    // changing the value of $c by decrementing it
echo $c,"\n";

$d = 15;
$d = $d + 5; // changing the value of $d through an expression
echo $d,"\n";

$e = "hello";
$e .= " world"; // changing the value of $e by concatenation
echo $e,"\n";
