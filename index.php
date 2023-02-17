<?php
/* array_slice() - Array function/method
 *
The array_slice() function is an inbuilt function of PHP. The array_slice() function is used to extract a slice of an array. This function was introduced in 4.0.

The array_slice() function returns the slice of the array as a new array, leaving the original array unchanged.
 * ------------------------ array_slice(array, start, length, preserve): ------------------------

01-ARRAY: Required. Specifies an array

02-START: Required. Numeric value. Specifies where the function will start the slice. 0 = the first element. If this value is set to a negative number, the function will start slicing that far from the last element. -2 means start at the second last element of the array.

03-LENGTH: Optional. Numeric value. Specifies the length of the returned array. If this value is set to a negative number, the function will stop slicing that far from the last element. If this value is not set, the function will return all elements, starting from the position set by the start-parameter.

04-PRESERVE : Optional. Specifies if the function should preserve or reset the keys. Possible values:
-> true - Preserve keys
-> false - Default. Reset keys

 *
 * https://www.w3schools.com/php/func_array_slice.asp
 * https://www.geeksforgeeks.org/php-array_slice-function/
 * https://www.php.net/manual/en/function.array-slice.php
 * https://www.javatpoint.com/post/php-array_slice-function
 */

$arr = ["apple", "orange", "mango", "lemon", "grape", "melons"];

// $sliceArr = array_slice( $arr, 2 ); //slice start position (2)

// $sliceArr = array_slice( $arr, 3, 2 ); //slice start position (3) & count 2 element

// $sliceArr = array_slice( $arr, 1, -2 ); //slice start position (2) & ends before 2 elements

// $sliceArr = array_slice( $arr, -4, -1 ); //slice start position (-5) & ends before 1 elements

// $sliceArr = array_slice( $arr, -3, 2 ); //slice start position (-3) & count 2 element

$sliceArr = array_slice( $arr, 3, 2, true ); //slice start position (3) & count 2 element with default keys

print_r( $sliceArr );

//Associative array slice example:
$associativeArr = ["a" => 12, "b" => 34, "c" => 53, "10" => 94, "d" => 64];

// $sliAsAr = array_slice( $associativeArr, 2 ); //it's not show proper key

// $sliAsAr = array_slice( $associativeArr, 2, -1, true ); //With the preserve parameter set to true

$sliAsAr = array_slice( $associativeArr, 2, null, true ); //With the preserve parameter set to true

print_r( $sliAsAr );