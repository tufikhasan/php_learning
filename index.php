<?php
/* array_walk() - Array Utility Functions - Very Important */

/* ************** array_walk($array, myFunction, $extraParam) ************

The array_walk() function is an inbuilt function in PHP. The array_walk() function walks through the entire array regardless of pointer position and applies a callback function or user-defined function to every element of the array. The array element’s keys and values are parameters in the callback function.

01: $array: This is a mandatory parameter and specifies the input array.

02: callbackFunction(): This parameter specifies the name of the user-defined function and is also mandatory. The user-defined function generally excepts two parameters of which the first parameter represent the array’s values and the second parameter represents the corresponding keys.

03: $extraparam: This is an optional parameter. It specifies an extra parameter to the user-defined function in addition to the two parameters, array keys and values.

RETURN VALUE: This function returns a boolean value. It returns TRUE on success or FALSE on failure.

 * https://www.geeksforgeeks.org/php-array_walk-function/
 * https://www.w3schools.com/php/func_array_walk.asp
 * https://www.php.net/manual/en/function.array-walk.php
 * https://www.javatpoint.com/post/php-array_walk-function
 */

$num = [1, 2, 3, 4, 5];
//01:
function square( $n ) {
    echo "$n Squre = " . $n * $n . PHP_EOL;
}
array_walk( $num, 'square' );

echo PHP_EOL;

//02:
array_walk( $num, function ( $n ) {
    echo "$n Power = " . $n * $n * $n . PHP_EOL;
} );

echo PHP_EOL;

$fruits = array( "d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple" );

//03:
function myfunction( $value, $key ) {
    echo "$key = $value\n";
}
array_walk( $fruits, 'myfunction', );

echo PHP_EOL;

//04:
function myfunction2( $value, $key, $p ) {
    echo "$key $p $value\n";
}
array_walk( $fruits, 'myfunction2', "has the value" );
