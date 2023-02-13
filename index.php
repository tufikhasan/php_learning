<?php
/* PHP String functions:
 *
 * The PHP string functions are part of the PHP core. No installation is required to use these functions.
 *
 * https://www.w3schools.com/php/php_ref_string.asp
 * https://www.php.net/manual/en/ref.strings.php
 */

//------------------------------ explode(separator,string,limit) ---------------------------
//Break a string into an array:
//01:
$name = "Tufik Hasan";
$part = explode( " ", $name );

print_r( $part );

echo "{$part[0]}\n";
echo "{$part[1]}\n";

//02:
echo "\nUsing the limit parameter to return a number of array elements:\n";

$str = 'one,two,three,four';
// zero limit
print_r( explode( ',', $str, 0 ) );
echo "\n";
// positive limit
print_r( explode( ',', $str, 2 ) );
echo "\n";
// negative limit
print_r( explode( ',', $str, -1 ) );

//------------------------------ implode(separator,array) ---------------------------
//Join array elements with a string:
echo "\n\n";

$arr = array( 'Hello', 'World!', 'Beautiful', 'Day!' );
echo implode( " ", $arr );

//------------------------------ join(separator,array) ---------------------------
//Join array elements with a string:
echo "\n\n";

$arr = array( 'Hello', 'World!', 'Beautiful', 'Day!' );
echo join( "+", $arr );

//------------------------------ str_split(string,length) ---------------------------
//The str_split() function splits a string into an array.
echo "\n\n";
print_r( str_split( "Hello" ) );
print_r( str_split( "Hello", 3 ) );
