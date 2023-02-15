<?php
/*
 *************  Indexed Array *************

PHP indexed array is an array which is represented by an index number by default. All elements of array are represented by an index number which starts from 0.

PHP indexed array can store numbers, strings or any object. PHP indexed array is also known as numeric array.

 * There are two ways to create indexed arrays:

 * https://www.javatpoint.com/php-indexed-array
 * https://www.w3schools.com/php/php_arrays_indexed.asp

 */

// To create an indexed array in PHP, you can use the square bracket notation with a list of values separated by commas, like this:
// 01:
$braArray = ["mango", "orange", "apple", "pine-apple", "banana"];

for ( $i = 0; $i < count( $braArray ); $i++ ) {
    echo $braArray[$i] . PHP_EOL;
}

echo "\n";

foreach ( $braArray as $fruit ) {
    echo $fruit . PHP_EOL;
}

// 02:
// the index can be assigned manually
// $cars[0] = "Volvo";
// $cars[1] = "BMW";
// $cars[2] = "Toyota";

echo "\n";

// This creates an array with four elements, each with an integer value. You can also use the array() function to create an indexed array, like this:
// 01:
$arr = array( "Dhaka", "Bogura", "Rajshahi", "Sylhet" );

for ( $i = 0; $i < count( $arr ); $i++ ) {
    echo $arr[$i] . PHP_EOL;
}

echo "\n";

foreach ( $arr as $city ) {
    echo $city . PHP_EOL;
}

// 02:
// the index can be assigned manually
// $students[0] = "Tufik";
// $students[1] = "Rakib";
// $students[2] = "Tarif";
// print_r( $students );
