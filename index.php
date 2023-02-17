<?php
/* Sorting Arrays
 *
What is sorting?
Sorting refers to ordering data in an alphabetical, numerical order and increasing or decreasing fashion according to some linear relationship among the data items.Sorting greatly improves the efficiency of searching.

Sorting Functions For Arrays In PHP:

-> sort() – sorts arrays in ascending order
-> rsort() – sorts arrays in descending order
-> asort() – sorts associative arrays in ascending order, according to the value
-> arsort() – sorts associative arrays in descending order, according to the value
-> ksort() – sorts associative arrays in ascending order, according to the key
-> krsort() – sorts associative arrays in descending order, according to the key
-> usort() – sorts a given array by using a user-defined comparison function

 *
 * https://www.w3schools.com/php/php_arrays_sort.asp
 * https://www.php.net/manual/en/array.sorting.php
 * https://www.geeksforgeeks.org/sorting-arrays-php-5/
 *
 */

$arr = ["banana", "melons", "mango", "apple", "Apple", "lemon"];
$number = [5, 2, 45, 23, 65, 4, 9, 1, 6];

// ---------- sort() - sorts arrays in ascending order ----------
sort($arr);
print_r($arr);

// sort( $arr, SORT_STRING | SORT_FLAG_CASE );
// print_r( $arr );

sort($number);
print_r($number);

sort($number, SORT_STRING);
print_r($number);

// sort( $number, SORT_LOCALE_STRING );
// print_r( $number );


// ---------- rsort() – sorts arrays in descending order ------------
// rsort( $arr );
// print_r( $arr );

// rsort( $number );
// print_r( $number );

// rsort( $number, SORT_STRING );
// print_r( $number );



$arr2 = ["a" => 12, "x" => 3, "d" => 64, "g" => 94, "y" => 9, "c" => 53, "b" => 34];

// ----------- asort() – sorts associative arrays in ascending order, according to the value ------------
// asort( $arr2 );
// print_r( $arr2 );

// asort( $arr2, SORT_STRING );
// print_r( $arr2 );


// ----------- arsort() – sorts associative arrays in descending order, according to the value ------------
// arsort( $arr2 );
// print_r( $arr2 );

// arsort( $arr2, SORT_STRING );
// print_r( $arr2 );


// ----------- ksort() – sorts associative arrays in ascending order, according to the key ------------
// ksort( $arr2 );
// print_r( $arr2 );


// ----------- krsort() – sorts associative arrays in descending order, according to the key ------------
// krsort( $arr2 );
// print_r( $arr2 );


// ----------- usort() – sorts a given array by using a user-defined comparison function ------------
// $array = array("apple", "banana", "cherry", "date");
// usort($array, function ($a, $b) {
//     return strlen($b) - strlen($a);
// });
// print_r($array);


// $num = array(10, 5, 3, 8, 2);
// usort($num, function ($a, $b) {
//     return $a - $b;
// });
// print_r($num);






/* ***** The sort() function in PHP can take one, two or three arguments: ***

 * 01: The first argument is a mandatory parameter and specifies the array to be sorted.
 *
 * 02: The second argument is optional and specifies the sorting order. It can take one of the following  * values:
 * -> SORT_REGULAR: compare items normally (don't change types).
 * -> SORT_NUMERIC: compare items numerically.
 * -> SORT_STRING: compare items as strings.
 * -> SORT_LOCALE_STRING: compare items as strings, based on the current locale.
 * -> SORT_NATURAL: compare items as strings using "natural ordering" (i.e. alphabetical order).
 * -> SORT_FLAG_CASE: can be combined with SORT_STRING or SORT_NATURAL to sort strings in a case-insensitive manner.
 * -> If this argument is not provided, SORT_REGULAR will be used by default.
 *
 * 03: The third argument is optional and specifies whether to maintain the association between keys and values. If this argument is set to true, the keys will be preserved in the sorted array. If it is set to false or not provided, the keys will be re-indexed starting from 0.
 *
 */