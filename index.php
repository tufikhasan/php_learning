<?php
/* ****** Anonymous, Closure, callback, Functions In PHP *******
 *
 * In PHP, anonymous functions, also known as closures, can be used as both callbacks and stored in variables.
 * As a callback, an anonymous function can be passed as an argument to another function to be executed at a later time.
 * Anonymous functions, also known as closures
 *
 * https://www.php.net/manual/en/functions.anonymous.php
 */

//----------------- Anonymous function syntax ----------
function () {
    #This anonymous function. Anonymous always end with semi-colon.
};

//-------------- Function stored in variable -------------
$sum = function ( ...$numbers ) {
    //"array_sum" in PHP is a built-in function that calculates the sum of values in an array.
    return array_sum( $numbers );
};
echo $sum( 1, 2, 3, 4 ) . PHP_EOL;

//----------------- USE keyword -----------------
//In PHP, anonymous functions can be defined using the use keyword. The use keyword allows you to capture variables from the surrounding scope and use them within the anonymous function.

//Here is an example of using the use keyword with an anonymous function in PHP:
//01:
$name = 'John Doe';
$greet = function () use ( $name ) {
    return "Hello, $name";
};

echo $greet() . PHP_EOL; // Outputs Hello, John Doe

//02: You can updated $x value only inside function
$x = 1;
$fun = function () use ( $x ) {
    $x++;
    return "Updated only inside x = $x" . PHP_EOL;
};
echo $fun();
echo "Not updated outside x = $x " . PHP_EOL;

//03: USE [&] sign - for updating main $a value
$a = 1;
$fun = function () use ( &$a ) {
    $a++;
    return "Updated inside a = $a" . PHP_EOL;
};
echo $fun();
echo "Updated outside a = $a " . PHP_EOL;

//-------------- Callbacks examples ------------
$numbers = [1, 2, 3, 4, 5];

//01:
$numDouble = array_map( function ( $number ) {
    return $number * 2;
}, $numbers );

print_r( $numDouble );

//02:
$callBack = function ( $element ) {
    return $element * 2;
};

$doubledNumbers = array_map( $callBack, $numbers );
print_r( $doubledNumbers );

//03:
function dNum( $element ) {
    return $element * 2;
};

$numberDouble = array_map( "dNum", $numbers );
print_r( $numberDouble );