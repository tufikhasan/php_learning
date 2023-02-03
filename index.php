<?php
/*
====== PHP Numbers - integers ===========
The PHP number system is a system used to represent numerical values in the PHP programming language. PHP supports both integer and floating-point numbers, with integers being whole numbers and floating-point numbers having a decimal component. PHP also supports various arithmetic operations, such as addition, subtraction, multiplication, and division, on both types of numbers.

-> https://www.w3schools.com/php/php_numbers.asp
-> https://www.php.net/manual/en/language.types.integer.php
*/

/** PHP Integers
 * 2, 256, -256, 10358, -179567 are all integers.
 * An integer is a number without any decimal part.
 * 
 * An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.
 * 
 * Note: Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).
 * 
*/
//=== Predefined Constants: https://www.php.net/manual/en/reserved.constants.php =====
//PHP_INT_MAX - The largest integer supported
$num = 495789457487865656565477584;
if($num > PHP_INT_MAX){
    echo "The number is too large for an integer\n";
}
//PHP_INT_MIN - The smallest integer supported
$num = -92233720368547758097;
if($num < PHP_INT_MIN){
    echo "The number is too smaller for an integer\n";
}
//PHP_INT_SIZE -  The size of an integer in bytes
echo "The size of an integer is " . PHP_INT_SIZE . " bytes\n";

//==================== check if the type of a variable is integer - https://www.php.net/manual/en/function.is-int.php:
//s_int()
var_dump(is_int(23)); //bool(true)
var_dump(is_int("23")); //bool(false)
var_dump(is_int(23.5)); //bool(false)

//is_integer()
var_dump(is_integer(23)); //bool(true)
var_dump(is_integer("23")); //bool(false)
var_dump(is_integer(23.5)); //bool(false)
