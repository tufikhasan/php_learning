<?php
/* str_replace($search, $replace, $string, $count)
 *
"str_replace()" is a built-in PHP function used to replace all occurrences of a search string with a replacement string within a given string. The function takes three mandatory arguments and an optional fourth argument:
 *
 * https://www.php.net/manual/en/function.str-replace.php
 * https://www.w3schools.com/php/func_string_str_replace.asp
 * https://www.geeksforgeeks.org/php-str_replace-function/
 * https://www.javatpoint.com/php-string-str_replace-function
 */

//01:
$string = "The quick brown fox jumped over the lazy dog";
$replace = str_replace( "dog", "cat", $string );
echo $replace . PHP_EOL;

//02:
// $string = "The quick brown fox jumped over the lazy dog";
// $replace = str_replace( "dog", "cat", $string, $count );
// echo $replace . PHP_EOL;
// echo "Total replace : $count\n";

//03:
// $string = "The brown brown fox jumped over the lazy dog dog";
// $replace = str_replace( array( "brown", "dog" ), array( "red", "cat" ), $string, $count );
// echo $replace . PHP_EOL;
// echo "Total replace : $count\n";

//04:
// $string = "The brown brown fox jumped over the lazy dog dog";
// $replace = str_replace( ["brown", "dog"], ["red", "cat"], $string, $count );
// echo $replace . PHP_EOL;
// echo "Total replace : $count\n";

//05:
// $string = "fox dog";
// $replace = str_replace( ["fox", "dog"], "cat", $string, $count );
// echo $replace . PHP_EOL;
// echo "Total replace : $count\n";

//06:
// $string = "fox Fox Dog dog";
// $replace = str_replace( ["fox", "dog"], "cat", $string, $count );
// echo $replace . PHP_EOL;
// echo "Total replace : $count\n";

//07: case insensitive
$string = "fox Fox Dog dog";
$replace = str_ireplace( ["fox", "dog"], "cat", $string, $count );
echo $replace . PHP_EOL;
echo "Total replace : $count\n";
