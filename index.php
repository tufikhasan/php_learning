<?php
/*
====== PHP Numbers - Float ===========
The PHP number system is a system used to represent numerical values in the PHP programming language. PHP supports both integer and floating-point numbers, with integers being whole numbers and floating-point numbers having a decimal component. PHP also supports various arithmetic operations, such as addition, subtraction, multiplication, and division, on both types of numbers.

-> https://www.w3schools.com/php/php_numbers.asp
-> https://www.php.net/manual/en/language.types.integer.php
*/

//is_float() - https://www.php.net/manual/en/function.is-float.php
var_dump(is_float(23)); //bool(false)
var_dump(is_float("23")); //bool(false)
var_dump(is_float(23.5)); //bool(true)

echo "\n";

//is_double() - The function is_double() is not a predefined function in PHP
