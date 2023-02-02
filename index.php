<?php
/*
====== sprintf() — Return a formatted string ===========
-> https://www.php.net/manual/en/function.sprintf.php
-> https://www.w3schools.com/php/func_string_sprintf.asp

In PHP, sprintf is a built-in function that formats a string and returns it as a result. The function takes a format string as its first argument, followed by one or more arguments that provide values to be formatted according to the specified format. The result of the function is a formatted string.
*/
$name = "John";
$age = 30;
$result = sprintf("My name is %s and I am %d years old.", $name, $age); 
echo $result;   // Output: "My name is John and I am 30 years old."

/*
In the above example, '%s' represents a string placeholder, and '%d' represents an integer placeholder. The values of '$name' and '$age' are inserted into the format string and the result is stored in the '$result' variable.
*/

