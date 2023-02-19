<?php
/* array_reduce() - Array Utility Functions - Very Important */

/* ************** array_reduce(array, myfunction, initial) ************

This inbuilt function of PHP is used to reduce the elements of an array into a single value that can be of float, integer or string value. The function uses a user-defined callback function to reduce the input array.

Parameters:
The function takes three arguments and are described below:

01: $array (mandatory): This is a mandatory parameter and refers to the original array from which we need to reduce.
02: own_function (mandatory): This parameter is also mandatory and refers to the user-defined function that is used to hold the value of the $array
03: $initial (optional): This parameter is optional and refers to the value to be sent to the function.

Return Value: This function returns the reduced result. It can be of any type int, float or string.

 * https://www.w3schools.com/php/func_array_reduce.asp
 * https://www.php.net/manual/en/function.array-reduce.php
 * https://www.geeksforgeeks.org/php-array_reduce-function/
 * https://www.javatpoint.com/post/php-array_reduce-function
 */

//01
$num = [1, 2, 3, 4, 5];
$red = array_reduce( $num, fn( $acc, $cur ) => $acc += $cur );
echo $red . "\n";

//02
$num = [1, 2, 3, 4, 5, 6, 7, 8, 9];
function oddNum( $total, $currect ) {
    if ( $currect % 2 == 1 ) {
        $total[] = $currect;
    }
    return $total;

}
$oddNumPrint = array_reduce( $num, 'oddNum', [] );
print_r( $oddNumPrint );

// 03:
$names = array( "Alice", "Bob", "Charlie", "asif" );
function filterByA( $acc, $cur ) {
    $str = strtoupper( $cur );
    if ( substr( $str, 0, 1 ) == "A" ) {
        $acc[] = $cur;
    }
    return $acc;
}
$fillterByA = array_reduce( $names, 'filterByA', [] );
print_r( $fillterByA );

//04
function userfunction( $x1, $x2 ) {
    return $x1 . "-" . $x2;
}
$a = array( "PHP", "java", "python" );
print_r( array_reduce( $a, "userfunction", 6 ) );