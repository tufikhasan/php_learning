<?php
/* Converting to & from ASCII - chr(), ord() */

/* -------- ord($string) ------------
The ord() function is a inbuilt function in PHP that returns the ASCII value of the first character of a string. This function takes a character string as a parameter and returns the ASCII value of the first character of this string.

-> https://www.php.net/manual/en/function.ord.php
-> https://www.geeksforgeeks.org/php-ord-function/
-> https://www.w3schools.com/php/func_string_ord.asp

 */
//Convert the first byte of a string to a value between 0 and 255
echo ord( "H" ) . PHP_EOL;
echo ord( "Hello" ) . PHP_EOL;

/* -------- chr( $asciiVal) ------------
The chr() function is a built-in function in PHP and is used to convert a ASCII value to a character. It accepts an ASCII value as a parameter and returns a string representing a character from the specified ASCII value. The ASCII value can be specified in decimal, octal, or hex values.

# Octal values are defined by a leading 0.
# Hex values are defined by a leading 0x.

-> https://www.geeksforgeeks.org/php-chr-function/
-> https://www.php.net/manual/en/function.chr.php
-> https://www.w3schools.com/php/func_string_chr.asp

 */

echo chr( "72" ) . PHP_EOL;

//The decimal, octal and hex value of '#' is 35, 043 and 0x23 respectively

//decimal to character
echo chr( "35" ) . PHP_EOL;
//octal to character
echo chr( "35" ) . PHP_EOL;
//hex to character
echo chr( "35" ) . PHP_EOL;
