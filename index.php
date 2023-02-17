<?php
/* array_merge() - Concatenating several arrays
 *
The array_merge() function merges one or more arrays into one array.

Tip: You can assign one array to the function, or as many as you like.

Note: If two or more array elements have the same key, the last one overrides the others.

Note: If you assign only one array to the array_merge() function, and the keys are integers, the function returns a new array with integer keys starting at 0 and increases by 1 for each value (See example below).

Tip: The difference between this function and the array_merge_recursive() function is when two or more array elements have the same key. Instead of override the keys, the array_merge_recursive() function makes the value as an array.

 * ----------- array_merge(array1, array2, array3, ...): -----------------

-> array1    Required. Specifies an array
-> array2    Optional. Specifies an array
-> array3,...Optional. Specifies an array

 *
 * https://www.w3schools.com/php/func_array_merge.asp
 * https://www.php.net/manual/en/function.array-merge.php
 * https://www.geeksforgeeks.org/php-merging-two-arrays-using-array_merge/
 * https://www.javatpoint.com/post/php-array_splice-function
 */

$arr = ["apple", "orange", "mango", "lemon", "grape", "melons"];

// 01:
// $arr1 = array_slice( $arr, 0, 2 );
// $arr2 = array_slice( $arr, -4, 2 );
// print_r( $arr1 );
// print_r( $arr2 );

// $arrMerge = array_merge( $arr1, $arr2 );
// print_r( $arrMerge );

// 02:
// $arr1 = array_slice( $arr, 0, 2 );
// $arr2 = array_slice( $arr, -4, 2 );
// print_r( $arr1 );
// print_r( $arr2 );

// $arrPlus = $arr1 + $arr2; //this will not work because $arr1 & $arr2 has same key
// print_r( $arrPlus );

//03:
// $ar1 = array_slice( $arr, 4, 2 );
// $ar2 = array_slice( $arr, -3, 1, true );
// print_r( $ar1 );
// print_r( $ar2 );

// $arrPlus2 = $ar1 + $ar2; //this will  work because $ar1 & $ar2 keys not same
// print_r( $arrPlus2 );

//04:
$associativeArr = ["a" => 12, "b" => 34, "c" => 53, "10" => 94, "d" => 64];
$ar1 = array_slice( $associativeArr, 3, 2, true );
$ar2 = array_slice( $associativeArr, -3, 1, true );
$ar3 = ["j" => 64, "k" => 76];
print_r( $ar1 );
print_r( $ar2 );
print_r( $ar3 );

$arrPlus = $ar1 + $ar2 + $ar3; //this will  work because $ar1 & $ar2 keys not same
print_r( $arrPlus );
