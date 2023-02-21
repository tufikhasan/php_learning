<?php
/* trim($string, $characters) - ltrim() - rtrim()
 *
"trim()" is a built-in function that is used to remove whitespace (or other characters) from the beginning and end of a string.

01: The first parameter "$string" is the input string that you want to trim.

02: The second parameter "$characters" is optional and specifies the characters you want to remove from the string. By default, trim() removes the following characters:
-> space
-> tab
-> newline
-> carriage return
-> null character
-> vertical tab

You can specify any other characters that you want to remove by passing them as a string to the "$characters" parameter.

The "trim()" function returns the trimmed string. Note that the original string is not modified by the function; a new trimmed string is returned.

 *
 * https://www.php.net/manual/en/function.trim.php
 * https://www.w3schools.com/php/func_string_trim.asp
 * https://www.geeksforgeeks.org/php-trim-function/
 */

//01:
$string = "  Tufik Hasan  ";
echo trim( $string );

//02:
// $string = "  Tufik \n";
// echo trim( $string );
// echo "Hasan";

//03:
// $string = "  Tufik \n";
// echo trim( $string, " " );
// echo "Hasan";

//04:
// $string = "  Tufik \n";
// echo trim( $string, "\n" );
// echo "Hasan";

//05:
// $string = "  Tufik \n";
// echo trim( $string, " \n" );
// echo "Hasan";

//06:
// $string = "  .Tufik, \n";
// // echo trim( $string, " \n," );
// echo trim( $string, "., \n" );
// echo "Hasan";

//08: right trim
// $string = "  Tufik Hasan  ";
// echo rtrim( $string );

//07: left trim
// $string = "  Tufik Hasan  ";
// echo ltrim( $string );
