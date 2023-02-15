<?php
/*
 *************  PHP Array *************

In PHP, an array is a data structure that allows you to store multiple values in a single variable. It is a collection of key-value pairs, where each key corresponds to a specific value.

PHP arrays can be created using different syntaxes, but the most common way is to use square brackets to define an array with one or more key-value pairs.

 * PHP Advantages
 * -> Less Code
 * -> Easy to traverse
 * -> Sorting
 * -> Random Access

 * https://www.javatpoint.com/php-array
 * https://www.php.net/manual/en/language.types.array.php
 * https://www.w3schools.com/php/php_arrays.asp

 */

// ---------- create array using square brackets -------
//01:
$braArray = ["mango", "orange", "apple", "pine-apple", "banana"];
echo $braArray[1] . PHP_EOL;

$braArray[] = "grape"; //add item
$braArray[count( $braArray )] = "Water melons"; //add item
print_r( $braArray );

//02:
$students[0] = "Tufik";
$students[1] = "Rakib";
$students[2] = "Tarif";
print_r( $students );

echo "\n";

// ---------- create array using array() function -------
//01:
$arr = array( "Dhaka", "Bogura", "Rajshahi", "Sylhet" );
echo $arr[2] . PHP_EOL;

$arr[] = "Pabna"; //add item
$arr[count( $arr )] = "Bhola"; //add item
print_r( $arr );

//02:
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

print_r( $cars );