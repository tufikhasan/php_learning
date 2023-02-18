<?php
/* array_map() - Array Utility Functions - Very Important */

/* ************** array_map($callback, $array, ...$arrays) ************

The array_map() is an inbuilt function in PHP and it helps to modify all elements one or more arrays according to some user-defined condition in an easy manner. It basically, sends each of the elements of an array to a user-defined function and returns an array with new values as modified by that function.

Parameters used:
This function takes 2 compulsory parameter functionName and arr1 and the rest are optional.

01: functionName(mandatory): This parameter defines the name of the user-defined function according to which the values in the array will be modified.
02: arr1(mandatory): This parameter specifies the array to be modified.
03: arr2(mandatory): This parameter specifies the array to be modified.

The functionName parameter is compulsory and we can pass any number of arrays to this function named arr1, arr2.. arrn and so on.

 * https://www.php.net/manual/en/function.array-map.php
 * https://www.geeksforgeeks.org/php-array_map-function/
 * https://www.w3schools.com/php/func_array_map.asp
 * https://www.javatpoint.com/post/php-array_map-function
 */

// 01:
$names = array( "Alice", "Bob", "Charlie" );
$upper_names = array_map( "strtoupper", $names );
print_r( $upper_names );

// //02:
// $arr = array( 1, 2, 3, 4, 5 );
// function fun1( $v ) {
//     return ( $v + 7 ); // add 7
// }
// print_r( array_map( "fun1", $arr ) );

// // 03:
// $arr1 = array(1, 2, 3, 4, 5);
// $arr2 = array(1, 3, 3, 4, 8);
// function fun2($v1, $v2)
// {
//     if ($v1 == $v2) return 1;
//     else return 0;
// }
// print_r(array_map("fun2", $arr1, $arr2));

// // 04
// function userfunction($a1, $a2)
// {
//     if ($a1 === $a2) {
//         return "like";
//     }
//     return "unlike";
// }
// $x1 = array("sachin", "virat", "rahul");
// $x2 = array("pujara", "virat", "hardik");
// print_r(array_map("userfunction", $x1, $x2));

// // 05
// function show_Spanish( int $n, string $m ): string {
//     return "The number {$n} is called {$m} in Spanish";
// }
// $a = [1, 2, 3, 4, 5];
// $b = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

// $c = array_map( 'show_Spanish', $a, $b );
// print_r( $c );

// // 06
// $x = [1, 2, 3, 4, 5];
// $y = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];
// function map_Spanish( int $n, string $m ): array
// {
//     return [$n => $m];
// }
// $d = array_map( 'map_Spanish', $x, $y );
// print_r( $d );

//07
// $a = [1, 2, 3, 4, 5];
// $b = ['one', 'two', 'three', 'four', 'five'];
// $c = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

// $d = array_map( null, $a, $b, $c );
// print_r( $d );
