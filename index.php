<?php
/******* Comparison Operators ******
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


############### Comparison operators: ==, ===, !=, !==, <>, >, <, >=, <=, <=>
The PHP comparison operators are used to compare two values (number or string):
*/
//-> Equal(==)
$x = 100;  
$y = "100";
var_dump($x == $y); // returns true because values are equal

//-> Identical(===)
$x = 100;  
$y = "100";
var_dump($x === $y); // returns false because types are not equal

//-> Not equal(!=)
$x = 100;  
$y = "100";
var_dump($x != $y); // returns false because values are equal

//-> Not equal(<>)
$x = 100;  
$y = "100";
var_dump($x <> $y); // returns false because values are equal

//-> Not identical(!==)
$x = 100;  
$y = "100";
var_dump($x !== $y); // returns true because types are not equal

//-> Greater than(>)
$x = 100;
$y = 50;
var_dump($x > $y); // returns true because $x is greater than $y

//-> Less than(<)
$x = 10;
$y = 50;
var_dump($x < $y); // returns true because $x is less than $y

//-> Greater than or equal to(>=)
$x = 50;
$y = 50;
var_dump($x >= $y); // returns true because $x is greater than or equal to $y

//-> Less than or equal to(<=)
$x = 50;
$y = 50;
var_dump($x <= $y); // returns true because $x is less than or equal to $y

//-> Spaceship(<=>)
$x = 5;  
$y = 10;
echo ($x <=> $y); // returns -1 because $x is less than $y
echo "\n";

$x = 10;  
$y = 10;
echo ($x <=> $y); // returns 0 because values are equal
echo "\n";

$x = 15;  
$y = 10;
echo ($x <=> $y); // returns +1 because $x is greater than $y
