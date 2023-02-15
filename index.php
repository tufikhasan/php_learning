<?php
/**************  Removing data from associative arrays *************
In PHP, you can remove data from an associative array using the unset() function. The unset() function removes a specified key and its corresponding value from the array.

 * https://www.php.net/manual/en/function.unset.php
 * https://www.w3schools.com/php/func_var_unset.asp
 * https://www.javatpoint.com/php-unset-function

 */

//01:
$arr = [
    "name"    => "Tufik",
    "address" => "Bogura",
];
unset( $arr['name'] );
print_r( $arr );

//02:
$student = array(
    "name"   => "John",
    "age"    => 20,
    "course" => "Computer Science",
);

// Remove the "age" key and its value from the $student array
unset( $student["age"] );

// Output the updated $student array
print_r( $student );