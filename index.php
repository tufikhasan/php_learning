<?php
/* PHP: "func_get_args" & "func_num_args"
 *
 * In PHP, "func_get_args" and "func_num_args" are both functions that provide information about the arguments passed to a function.
 * In summary, "func_get_args" returns an array of all the arguments passed to a function, while "func_num_args" returns the number of arguments passed to a function. Both of these functions can be useful for writing functions that can handle a varying number of arguments.
 *
 * https://www.php.net/manual/en/functions.arguments.php
 * https://www.w3schools.com/php/php_looping_foreach.asp
 */

//------------------------------ "func_get_args" ---------------------------
// "func_get_args" is a function that returns an array of all the arguments passed to a function. This array can be accessed and manipulated like any other array in PHP.
function example() {
    $arguments = func_get_args();
    print_r( $arguments );
}

example( "apple", "banana", "cherry" );

echo "\n";

//------------------------------ "func_num_args" ---------------------------
// "func_num_args" is a function that returns the number of arguments passed to a function. This can be useful when you want to check how many arguments were passed to a function and take different actions based on that number.
function example2() {
    $num_args = func_num_args();
    echo "Number of arguments: $num_args";
}

example2( "apple", "banana", "cherry" );
