<?php
/*
PHP Constants are immutable:
In PHP, constants are considered immutable, which means that their values cannot be changed once they have been defined. Once a constant is defined using the define() function or the const keyword, its value remains the same throughout the execution of the program. Attempting to change the value of a constant will result in a runtime error.

Constants are typically used to store values that are used throughout a program, such as configuration settings, commonly used values, or other values that are meant to remain constant. By using constants instead of variables, you can ensure that their values remain unchanged, providing a more predictable and secure environment for your code.

######### For example: ##########
define("MY_CONSTANT", "Hello, world!");
echo MY_CONSTANT; // outputs "Hello, world!"

// Attempting to change the value of a constant will result in an error:
// MY_CONSTANT = "Goodbye, world!"; // Causes a fatal error


********** To create a constant, use the define() ************
Syntax: define(name, value, case-insensitive)  //Argument #3 is ignored since declaration of case-insensitive constants is no longer supported as of PHP 8.0.0

Parameters:
-> name: Specifies the name of the constant
-> value: Specifies the value of the constant
-> case-insensitive: Defining case-insensitive constants is deprecated as of PHP 7.3.0. As of PHP 8.0.0, only false is an acceptable value, passing true will produce a warning.
*/

//Argument #3 is ignored since declaration of case-insensitive constants is no longer supported as of PHP 8.0.0
// define("NAME","Tufik Hasan",true);

define("NAME","Tufik Hasan");
echo NAME;
echo "\n";

define("PI",3.14159);
//show constant value
echo PI;  //output = 3.14159
echo "\n";


//show constant value
echo constant("PI");  //output = 3.14159
echo "\n";


//constants cannot be directly embedded in string literals
echo "The PI value is PI ";  //output = The PI value is PI
echo "\n";

//constants cannot be directly embedded in string literals
echo "The PI value is {PI}";  //output = The PI value is {PI}
echo "\n";

//Using concatenation:
echo "The PI value is: ".PI;  //output = The PI value is {PI}: 3.14159
echo "\n";


//tricks to show define constant value in string
$constant = 'constant';
echo "The PI value is {$constant("PI")}\n";   //output = The PI value is 3.14159
echo "The PI value is {$constant("PI")}";   //output = The PI value is 3.14159
