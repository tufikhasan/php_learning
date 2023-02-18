<?php
/* Difference & intersection of two indexed & associated arrays */


/* ************** array_intersect(multipleArray...) & array_intersect_assoc(multipleArray...) ************
This builtin function of PHP is used to compute the intersection of two or more arrays. The function is used to compare the values of two or more arrays and returns the matches. The function prints only those elements of the first array that are present in all other arrays.

Note: The keys of elements are preserved. That is, the keys of elements in output array will be same as that of keys of those elements in the first array.

 * https://www.php.net/manual/en/function.array-intersect.php
 * https://www.php.net/manual/en/function.array-intersect-assoc.php
 * https://www.w3schools.com/php/func_array_intersect.asp
 * https://www.w3schools.com/php/func_array_intersect_assoc.asp
 * https://www.geeksforgeeks.org/php-array_intersect-function/
 */
$num1 = [8, 7, 5, 4,  3, "9"];
$num2 = [2, 7, 9, 1, 4];

$common = array_intersect($num1, $num2); //return $num1 all common number

// $common = array_intersect($num2, $num1); //return $num2 all common number

// $common = array_intersect($num1, $num2, [4, 5, 3, 7]); //return common number

// $common = array_intersect_assoc($num1, $num2); //return $num1 all common number if key matches

// $common = array_intersect_key($num2, $num1); //return all matches key value

print_r($common);

$arr1 = ["a" => "water-melon", "b" => "apple", "h" => "orange"];
$arr2 = ["a" => "mango", "b" => "apple", "c" => "orange", "d" => "lemon"];

$commonArr = array_intersect($arr1, $arr2); //return $arr1 all common value

// $commonArr = array_intersect($arr2, $arr1); //return $arr2 all common value

// $commonArr = array_intersect_assoc($arr1, $arr2); //return $arr1 all common number if key matches

// $commonArr = array_intersect_key($arr1, $arr2); //return all  matches key value

print_r($commonArr);






/* ************** array_diff(multipleArray...) & array_diff_assoc(multipleArray...) ************

The array_diff() is an inbuilt function in PHP ans is used to calculate the difference between two or more arrays. This function computes difference according to the values of the elements, between one or more array and return differences in the form of a new array. This function basically returns all the entries that are present in the first array which are not present in any other arrays.

RETURN TYPE: This function compares the first array in parameters with rest of the arrays and returns an array containing all the entries from $array1 that are not present in any of the other arrays.

 * https://www.php.net/manual/en/function.array-diff.php
 * https://www.php.net/manual/en/function.array-diff-assoc.php
 * https://www.w3schools.com/php/func_array_diff.asp
 * https://www.w3schools.com/php/func_array_diff_assoc.asp
 * https://www.geeksforgeeks.org/php-array_diff-function/
 */
$n1 = [7, 5, 4, "9"];
$n2 = [2, 1, 9, 4];

$diff = array_diff($n1, $n2); //return $n1 all difference number

// $diff = array_diff($n2, $n1); //return $n2 all difference number

// $diff = array_diff($n1, $n2, [4, 3, 7]); //return $n1 all difference number

$d1 = [1, 2, 9, 4, 3];
$d2 = [1, 2, 3, 4];

// $diff = array_diff_assoc($d1, $d2); //return $d1 all difference number if key doesn't matches

// $diff = array_diff_assoc($d2, $d1); //return $d2 all difference number if key doesn't matches

print_r($diff);

$ar1 = ["a" => "water-melon", "b" => "apple", "h" => "orange"];
$ar2 = ["a" => "mango", "b" => "apple", "c" => "orange", "d" => "lemon"];

$diffAr = array_diff($ar1, $ar2); //return $ar1 all difference value

// $diffAr = array_diff($ar2, $ar1); //return $ar2 all difference value

// $diffAr = array_diff_assoc($ar1, $ar2); //return $ar1 all difference value based on key

// $diffAr = array_diff_key($ar1, $ar2); //return $ar1 all difference key

// $commonArr = array_intersect_key($arr1, $ar2); //return all difference value matches key value

print_r($diffAr);
