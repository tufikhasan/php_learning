<?php
/******* Array Operators ******
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


############### Array operators: +, ==, ===, !=, <>, !==
The PHP array operators are used to compare arrays.
*/
//-> Union(+) - Union of $x and $y
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
print_r($x + $y); // union of $x and $y
echo "\n";

//-> Equality(==) - Returns true if $x and $y have the same key/value pairs
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x == $y);

//-> Identity(===) - Returns true if $x and $y have the same key/value pairs in the same order and of the same types
$x = array("a" => "red", "b" => "green");  
$y = array("a" => "red", "b" => "green");  
var_dump($x === $y);

//-> Inequality(!=) - Returns true if $x is not equal to $y
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x != $y);

//-> Inequality(<>) - Returns true if $x is not equal to $y
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x <> $y);

//-> Non-identity(!==) - Returns true if $x is not identical to $y
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x !== $y);
