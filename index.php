<?php
/* shuffle(), array_rand() - Array function */


/* -------------- shuffle($array) -----------------------
The shuffle() Function is a builtin function in PHP and is used to shuffle or randomize the order of the elements in an array. This function assigns new keys for the elements in the array. It will also remove any existing keys, rather than just reordering the keys and assigns numeric keys starting from zero.

 * https://www.w3schools.com/php/func_array_shuffle.asp
 * https://www.php.net/manual/en/function.shuffle.php
 * https://www.geeksforgeeks.org/php-shuffle-function/
 */

//01:
$num = [1, 2, 3, 4, 5];
shuffle($num);
print_r($num);
// echo "Random number $num[2]\n";


/* -------------- array_rand(array, number) -----------------------

The array_rand() function returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key.

 * https://www.w3schools.com/php/func_array_rand.asp
 * https://www.php.net/manual/en/function.array-rand.php
 * https://www.javatpoint.com/post/php-array_rand-function
 */

//03: Associative array shuffling problems
$fruits = array("a" => "apple", "b" => "banana", "c" => "orange", "d" => "grape");
shuffle($fruits);
print_r($fruits);


// //03: 
// $n = range(1, 5);
// $k = array_rand($n);
// echo "Random number is " . $num[$k] . PHP_EOL;

// //04: 
// $fruits = array("a" => "apple", "b" => "banana", "c" => "orange", "d" => "grape");
// $key = array_rand($fruits);
// echo "Random fruits is " . $fruits[$key] . PHP_EOL;

// //05:
// $a = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
// // print_r(array_rand($a, 1));
// print_r(array_rand($a, 2));
