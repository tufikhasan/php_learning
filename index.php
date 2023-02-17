<?php
/* array_reverse(array, preserve)
 *
01: array : Required. Specifies an array
02: preserve : Optional. Specifies if the function should preserve the keys of the array or not. Possible values:
-> true
-> false

 * https://www.php.net/manual/en/function.array-reverse.php
 * https://www.w3schools.com/php/func_array_reverse.asp

 *
 */
$input = array( "php", 4.0, array( "green", "red" ) );
$reversed = array_reverse( $input );
$preserved = array_reverse( $input, true );

print_r( $input );
print_r( $reversed );
print_r( $preserved );