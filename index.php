<?php
/*
 *************  Multidimensional or nested arrays *************
In PHP, you can create multidimensional or nested arrays, which are arrays that contain other arrays as elements. You can use them to represent complex data structures such as tables, matrices, or trees.

 * This a key value pair array
 * There are two ways to define associative array:

 * https://www.javatpoint.com/php-multidimensional-array
 * https://www.w3schools.com/php/php_arrays_multidimensional.asp
 * https://www.geeksforgeeks.org/multidimensional-arrays-in-php/

 */

//01:
// $foods = [
//     "fruits"     => explode( ', ', "Mango, Apple, Guava" ),
//     "vegetables" => explode( ', ', "Tomato, Capsicum" ),
//     "drinks"     => explode( ', ', "Water, Milk" ),
// ];
// print_r( $foods );
// array_push( $foods['drinks'], "Orange juice" ); //add new item drinks array
// print_r( $foods );

//02:
$arr = [
    "test" => [
        "test-again" => [
            "a", "b", "c",
        ],
    ],
];
echo $arr["test"]["test-again"][1]; // output = b
echo "\n";

//03:
$arr2 = [
    [1, 2, 3, 4],
    [11, 22, 33, 44],
    [111, 222, 333, 444],
    [1111, 2222, [
        "a", "b", "c",
    ], 4444],
];
// print_r( $arr2 );
echo $arr2[3][2][2]; // output = c
echo "\n";

//04:
// PHP program to creating two - dimensional associative array
$marks = array(

    // Ankit will act as key
    "Ankit" => array(

        // Subject and marks are
        // the key value pair
        "C"   => 95,
        "DCO" => 85,
        "FOL" => 74,
    ),

    // Ram will act as key
    "Ram"   => array(

        // Subject and marks are
        // the key value pair
        "C"   => 78,
        "DCO" => 98,
        "FOL" => 46,
    ),

    // Anoop will act as key
    "Anoop" => array(

        // Subject and marks are
        // the key value pair
        "C"   => 88,
        "DCO" => 46,
        "FOL" => 99,
    ),
);

echo "\n";
print_r( $marks );
echo $marks["Anoop"]["DCO"];