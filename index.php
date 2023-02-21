<?php
/* sscanf() - parse a string according to a specified format.
 *
The "sscanf()" function parses input from a string according to a specified format. The sscanf() function parses a string into variables based on the format string.

If only two parameters are passed to this function, the data will be returned as an array. Otherwise, if optional parameters are passed, the data parsed are stored in them. If there are more specifiers than variables to contain them, an error occurs. However, if there are less specifiers than variables, the extra variables contain NULL.

SYNTAX: sscanf(string,format,arg1,arg2,arg++)

 *
 * https://www.php.net/manual/en/function.sscanf.php
 * https://www.w3schools.com/php/func_string_sscanf.asp
 * https://www.javatpoint.com/php-string-sscanf-function
 */

//01:
$string = "Tufik Hasan 01521489753 tufikhasan05@gmail.com";
$info = sscanf($string, "%s %s %11s %s");
print_r($info);

//02:
$string = "Tufik Hasan 01521489753 tufikhasan05@gmail.com";
sscanf($string, "%s %s %11s %s", $fName, $lName, $mobile, $gmail);
echo "Firstname = $fName, Lastname = $lName\n";
echo $gmail;

echo "\n";

//03: hexa to decimal code
$hexColor = "#FF36Fc";
sscanf($hexColor, "#%2x %2x %2x", $red, $green, $blue);
echo $red . $green . $blue;
