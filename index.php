<?php
/******* Conditional assignment Operators ******
 * https://www.w3schools.com/php/php_operators.asp
 * https://www.php.net/manual/en/language.operators.php 
 * 
 * PHP operators are symbols that perform specific operations on values and variables. They are used to manipulate data and perform mathematical, comparison, and logical operations. PHP operators include:
 * * Arithmetic operators: : +, -, *, /, %,**
 * * Assignment operators: =, +=, -=, *=, /=, %=
 * * Increment/Decrement operators: ++, --
 * * Comparison operators: ==, ===, !=, <>, !==, <, >, <=, >=, <=>
 * * Logical operators: &&, ||, !, and, or, xor
 * * String operators: ., .=
 * * Array operators: +, ==, ===, !=, <>, !==
 * * Conditional assignment operators: ?:, ??


############### Conditional assignment operators: ?:, ??
The PHP conditional assignment operators are used to set a value depending on conditions:
*/
//-> Ternary(?:) - Returns the value of $x. The value of $x is expr2 if expr1 = TRUE. The value of $x is expr3 if expr1 = FALSE
$num = 44;
echo $num < 18 ? "Your are a child": "Your are adult";
echo "\n";
echo $num < 18 ? "Your are a child": ($num < 30? "Your are young":"Your age old");
echo "\n";

//-> Null coalescing(??) - Returns the value of $x. The value of $x is expr1 if expr1 exists, and is not NULL. If expr1 does not exist, or is NULL, the value of $x is expr2.
$name = "Tufik Hasan";
echo $name = $name ?? "Rakib";
echo "\n";

echo $color = $color ?? "red";
