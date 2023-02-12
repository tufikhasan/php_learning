<?php
/* ****** Arrow Functions In PHP *******
 *
 * The "fn" keyword is used to create arrow functions. Arrow functions are only available in PHP versions 7.4 and up.
 * Arrow functions have access to all variables from the scope in which they were created.
 * Arrow functions, also known as "short closure" syntax, is a shorthand way to define anonymous functions in PHP. Arrow functions were introduced in PHP 7.4, and provide a concise and more readable syntax for defining anonymous functions.
 * Arrow function syntax specially use for a inline callback function
 *
 * https://www.php.net/manual/en/functions.arrow.php
 * https://www.w3schools.com/php/keyword_fn.asp
 */

//----------------- Arrow function syntax ----------
// fn(arguments) => expression to be returned;
fn( $element ) => $element;

//----------------- Arrow function examples -----------------
//01
$name = 'John Doe';
$greet = fn() => "Hello, $name";
echo $greet() . PHP_EOL; // Outputs Hello, John Doe

//02:
$myName = fn( $x ) => $x;
echo $myName( "Tufik Hasan" ) . PHP_EOL;

//03:
$array = array( 1, 2, 3, 4 );
$array2 = array_map( fn( $num ) => $num * 2, $array );
print_r( $array2 );

//04:
$x = 2;
$arr = array( 1, 2, 3, 4 );
$arr2 = array_map( fn( $num ) => $num + $x, $arr );
print_r( $arr2 );