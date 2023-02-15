<?php
/*
 *************  Associative Arrays *************

PHP allows you to associate name/label with each array elements in PHP using => symbol. Such way, you can easily remember the element because each element is represented by label than an incremented number.

 * This a key value pair array
 * There are two ways to define associative array:

 * https://www.javatpoint.com/php-associative-array
 * https://www.php.net/manual/en/language.types.array.php
 * https://www.w3schools.com/php/php_arrays_associative.asp
 * https://www.geeksforgeeks.org/associative-arrays-in-php/

 */

//--------------------- You can assign associative like this: --------------
$salary["tufik"] = 20000;
$salary["rakib"] = 20000;
$salary["sabbir"] = 20000;
print_r( $salary );

//--------------------- You can assign associative like this: --------------
//01:
$person = array(
    "name"    => "John",
    "address" => "USA",
);
//02:
// $person = [
//     "name"    => "John",
//     "address" => "USA",
// ];

$person["age"] = 32; //add new item in a array

print_r( $person );
echo "Myself {$person['name']}, {$person['age']} years old, lives in {$person["address"]}\n\n";

// --------------- iteration ------------
$name = array_keys( $person );

for ( $i = 0; $i < count( $name ); $i++ ) {
    echo "key = {$name[$i]}, value = {$person[$name[$i]]}" . PHP_EOL;
}

echo "\n\n";

foreach ( $person as $key => $value ) {
    echo "key = {$key}, value = {$value}" . PHP_EOL;
}