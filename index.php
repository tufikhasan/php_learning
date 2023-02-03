<?php
/******* String Operators ******
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


############### String operators: ., .=
PHP has two operators that are specially designed for strings.
*/
//-> Concatenation(.) - Concatenation of $txt1 and $txt2
$txt1 = "Dot";
$txt2 = " Concatenation";
echo $txt1 . $txt2;
echo "\n";

//-> Concatenation assignment(.=) - Appends $txt2 to $txt1
$txt1 = "Concatenation";
$txt2 = " assignment";
$txt1 .= $txt2;
echo $txt1;
