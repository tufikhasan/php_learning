<?php
/* array_walk() - Array Utility Functions - Very Important */

/* ************** array_filter($array, $callback_function, $flag) ************

This built-in function in PHP is used to filter the elements of an array using a user-defined function which is also called a callback function. The array_filter() function iterates over each value in the array, passing them to the user-defined function or the callback function. If the callback function returns true then the current value of the array is returned into the result array otherwise not. This way the keys of the array gets preserved, i.e. the key of element in the original array and output array are same.

01: $array (mandatory): This refers to the input array on which the filter operation is to be performed.

02: $callback_function (optional): Refers to the user-defined function. If the function is not supplied then all entries of the array equal to FALSE , will be removed.

03: $flag (optional): Refers to the arguments passed to the callback function.
    -> "ARRAY_FILTER_USE_KEY" – passes key as the only argument to a callback function, instead of the value of the array.
    -> "ARRAY_FILTER_USE_BOTH" – passes both value and key as arguments to callback instead of the value.

 * https://www.geeksforgeeks.org/php-array_filter-function/
 * https://www.javatpoint.com/post/php-array_filter-function
 * https://www.php.net/manual/en/function.array-filter.php
 * https://www.w3schools.com/php/func_array_filter.asp
 */

$num = [1, 2, 3, 4, 5];
//01:
function even($n)
{
    return $n % 2 == 0;
}
$evenNum = array_filter($num, 'even');
print_r($evenNum);

echo PHP_EOL;

//02:
$oddNum = array_filter($num, fn ($n) => $n % 2 != 0);
print_r($oddNum);

echo PHP_EOL;


$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
//03:
print_r(array_filter($arr, function ($k) {
    return $k == 'b';
}, ARRAY_FILTER_USE_KEY));

echo PHP_EOL;

//04:
print_r(array_filter($arr, function ($v, $k) {
    return $k == 'b' || $v == 4;
}, ARRAY_FILTER_USE_BOTH));

echo PHP_EOL;

//05:
$allNum = [0 => 'foo', 1 => false, 2 => -1, 3 => null, 4 => '', 5 => '0', 6 => 0,];
print_r(array_filter($allNum));
