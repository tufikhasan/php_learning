<?php
/******* PHP Math Functions ******
 * The math functions can handle values within the range of integer and float types.
* https://www.w3schools.com/php/php_ref_math.asp
*/

//pi() - Returns the value of PI
echo pi()."\n";     // 3.1415926535898

//min() - Returns the lowest value in an array, or the lowest value of several specified values
$arr = array(394,23,54,89,123,56,90);
echo min($arr)."\n";    // 23

//max() - Returns the highest value in an array, or the highest value of several specified values
$arr = array(39,23,54,89,123,56,90);
echo max($arr)."\n";    // 123

//abs() - Returns the absolute (positive) value of a number
echo abs(-5.5)."\n";    // 5.5

//sqrt() - function returns the square root of a number:
echo sqrt(64)."\n";     // 64

//round() - function rounds a floating-point number to its nearest integer:
echo(round(0.60)."\n");  // 1
echo(round(0.49)."\n");  // 0

//rand() - function generates a random number:
echo(rand()."\n");  //generates a random number
echo(rand(1,10)."\n");  //random number between 1 to 10

//floor() - Round numbers down to the nearest integer:
echo(floor(0.60) . "\n"); // 0
echo(floor(0.40) . "\n"); // 0
echo(floor(5) . "\n");  // 5
echo(floor(5.1) . "\n");    // 5
echo(floor(-5.1) . "\n");   // -6
echo(floor(-5.9). "\n");    // -6

//pow() - Returns x raised to the power of y
echo(pow(3,2) . "\n");