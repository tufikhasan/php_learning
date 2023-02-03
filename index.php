<?php
/******* Assignment Operators ******
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


############### Assignment operators: =, +=, -=, *=, /=, %=
The PHP assignment operators are used with numeric values to write a value to a variable.
The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.
*/
//-> Assign(=)
$a = $b = 2;
echo "Variable a=$a & b=$b\n";  // Variable a=2 & b=2

$c = 5;
$a = $b = $c;
echo "Variable a=$a & b=$b\n";  //Variable a=5 & b=5

$x = 3;
$y = 2;
//-> Addition(+=)
echo $x += $y;   // x = x + y (output = 5)
echo("\n");

//-> Subtraction(-=)
$x = 3;
echo $x -= $y;   // x = x - y (output = 1)
echo("\n");

//-> Multiplication(*=)
$x = 3;
echo $x *= $y;   // x = x * y (output = 6)
echo("\n");

//-> Division(/=)
$x = 3;
echo $x /= $y;   // x = x / y (output = 1.5)
echo("\n");

//-> Modulus(%=)
$x = 3;
echo $x %= $y;   // x = x % y (output = 1)
echo("\n");


//extra example
$num = 10;
$num + 5;
echo $num."\n";  // 10

$num2 = $num + 5;
echo $num2."\n";  // 15

$ex = 5-2 * 2;
echo $ex."\n";  // 1

$ex =(5-2) * 2;
echo $ex."\n";  // 6

$ex = 32-8 / 11-5;
echo $ex."\n";  // 26.272727272727

$ex = (32-8) / (11-5);
echo $ex."\n";  // 4

