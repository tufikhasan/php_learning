<?php
/******* Increment/Decrement Operators ******
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


############### Increment/Decrement operators: ++, --
(++) increment operators are used to increment a variable's value.
(--) decrement operators are used to decrement a variable's value.
NOTE REMIND THIS: ($num = 2 + 3; This is called an operation) Here 2 and 3 are operands, The (+) sign is the operator
*/
//-> increment(++)
$a = 5;
$a++;  //a = a + 1, a += 1
echo $a,"\n";

//-> decrement(--)
$b = 5;
$b--;  //b = b - 1, b -= 1
echo $b,"\n";


//extra example
$n = 2;
$m = $n++;
echo "m= $m and n = $n \n"; //m= 2 and n = 3 
/*
$m = $n++;
$m = $n;  // 2
$n = $n + 1;  //3
*/

$n = 2;
$m = ++$n;
echo "m= $m and n = $n \n";  //m= 3 and n = 3 
/*
$m = ++$n;
$n = $n + 1;  //3
$m = $n;  // 3
*/
