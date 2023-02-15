<?php
/*
 *************  Associative Arrays - Importance *************
PHP allows you to associate name/label with each array elements in PHP using => symbol. Such way, you can easily remember the element because each element is represented by label than an incremented number.
 * This a key value pair array
 * There are two ways to define associative array:
 * https://www.javatpoint.com/php-associative-array
 * https://www.php.net/manual/en/language.types.array.php
 * https://www.w3schools.com/php/php_arrays_associative.asp
 * https://www.geeksforgeeks.org/associative-arrays-in-php/
 */

//----------------
//01:
$students = [
    1          => "Tufik",
    "10"       => "Rakib",
    "12r"      => "Sabbir",
    "thirteen" => "Rocky",
];
echo $students[1] . PHP_EOL; //output = Tufik
echo $students[10] . PHP_EOL; //output = Rakib
// echo $students[12r] . PHP_EOL;  // output = Parse error: syntax error
echo $students["thirteen"]; // output = Rocky

echo "\n\n";

//02:
$foods = [
    "fruits"     => "Mango, Apple, Guava",
    "vegetables" => "Tomato, Capsicum",
    "drinks"     => "Water, Milk",
];

echo $foods['vegetables'] . PHP_EOL;
$foods["vegetables"] = $foods["vegetables"] . ", Pumpkin"; //add new item
echo $foods["vegetables"];

echo "\n\n";

echo $foods['drinks'] . PHP_EOL;
$foods["drinks"] .= ", Orange juice"; //add new item
echo $foods["drinks"];

echo "\n\n";

// ------------------------------- Iteration --------------------------
foreach ( $foods as $key => $value ) {
    echo "{$key} = {$value}\n";
}

echo "\n";

$keys = array_keys( $foods );
for ( $i = 0; $i < count( $keys ); $i++ ) {
    echo $keys[$i] . "\n";
}

echo "\n";

$values = array_values( $foods );
for ( $i = 0; $i < count( $values ); $i++ ) {
    echo $values[$i] . "\n";
}