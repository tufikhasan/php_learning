<?php
/* array_splice() - Array function/method
 *
The array_splice() function removes selected elements from an array and replaces it with new elements. The function also returns an array with the removed elements.

Tip: If the function does not remove any elements (length=0), the replaced array will be inserted from the position of the start parameter (See Example 2).

Note: The keys in the replaced array are not preserved.

 * ----------- array_splice(array, start, length, array): -----------------

01-ARRAY: Required. Specifies an array

02-START: Required. Numeric value. Specifies where the function will start removing elements. 0 = the first element. If this value is set to a negative number, the function will start that far from the last element. -2 means start at the second last element of the array.

03-LENGTH: Optional. Numeric value. Specifies how many elements will be removed, and also length of the returned array. If this value is set to a negative number, the function will stop that far from the last element. If this value is not set, the function will remove all elements, starting from the position set by the start-parameter.

04-ARRAY : Optional. Specifies an array with the elements that will be inserted to the original array. If it's only one element, it can be a string, and does not have to be an array.

 *
 * https://www.w3schools.com/php/func_array_splice.asp
 * https://www.php.net/manual/en/function.array-splice.php
 * https://www.geeksforgeeks.org/php-array_splice-function/
 * https://www.javatpoint.com/post/php-array_splice-function
 *
 * NOTE: array_splice() modify original array
 */

$arr = ["apple", "orange", "mango", "lemon", "grape", "melons"];
echo "\n------ main array -------\n";
print_r( $arr );

// $spliceArr = array_splice( $arr, 3, 2 ); // removes 2 elements starting at index 3

// $spliceArr = array_splice( $arr, 1, -1 ); // removes all elements before end of last 1 element elements starting at index 1

// $spliceArr = array_splice( $arr, -4, 2 ); // removes 2 elements starting at index -4

// $spliceArr = array_splice( $arr, -4, -1 ); // removes all elements before end of last 1 element elements starting at index -4

$newArr = ["jackfruit", "pineapple"];
$spliceArr = array_splice( $arr, 1, 4, $newArr ); // removes 4 elements starting at index 1, inserted array items

//
echo "---------- remove item ----------\n";
print_r( $spliceArr );
echo "\n------ main array after remove item -------\n";
print_r( $arr );
