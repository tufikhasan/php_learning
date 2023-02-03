<?php
/******* Logical Operators ******
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


############### Logical operators: &&, ||, !, and, or, xor
The PHP logical operators are used to combine conditional statements.
*/
//-> And(&&) - True if both $x and $y are true
$x = 100;  
$y = 50;
if ($x == 100 && $y == 50) {
    echo "Hello I am from (&&) operator!\n";
}

//-> Or(||) - True if either $x or $y is true
$x = 100;  
$y = 50;
if ($x == 100 || $y == 50) {
    echo "Hello I am from (||) operator!\n";
}

//-> Not(!) - True if $x is not true
$x = 100;  
if ($x !== 90) {
    echo "Hello I am from (!) operator!\n";
}

//-> And(and) - True if both $x and $y are true
$x = 100;  
$y = 50;
if ($x == 100 and $y == 50) {
    echo "Hello I am from (and) operator!\n";
}

//-> Or(or) - True if either $x or $y is true
$x = 100;  
$y = 50;
if ($x == 100 or $y == 50) {
    echo "Hello I am from (rr) operator!\n";
}

//-> Xor(xor) - True if either $x or $y is true, but not both
$x = 100;  
$y = 50;
if ($x == 100 xor $y == 80) {
    echo "Hello I am from (xor) operator!\n";
}

