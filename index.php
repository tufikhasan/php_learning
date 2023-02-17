<?php
/* Searching in Indexed & Associated Arrays */


/* ******************* in_array() ************
The in_array() function is a built-in PHP function that checks if a given value exists in an array. The function takes three arguments:

-> The first argument is the value you want to search for.
-> The second argument is the array you want to search in.
-> The third argument is optional and is a boolean flag that specifies whether the function should use strict type checking. If this parameter is set to true, the function will also check the types of the values in the array, and return true only if the types match as well as the values.

 * https://www.php.net/manual/en/function.in-array.php
 * https://www.w3schools.com/php/func_array_in_array.asp
 */
$number = [5, 2, 5, "9", 1, 6];

if (in_array(9, $number)) {
    echo "9 is exist\n";
} else {
    echo "9 is not exist\n";
}
//strict type checking
if (in_array(9, $number, true)) {
    echo "9 is exist\n";
} else {
    echo "9 is not exist\n";
}




/* ******************* array_search(value, array, strict) ************
The in_array() function is a built-in PHP function that checks if a given value exists in an array. The function takes three arguments:

01- value: Required. Specifies the value to search for
02- array: Required. Specifies the array to search in
03- strict: Optional. If this parameter is set to TRUE, then this function will search for identical elements in the array. Possible values:
-> true
-> false - Default

 * https://www.php.net/manual/en/function.array-search.php
 * https://www.w3schools.com/php/func_array_search.asp
 * https://www.geeksforgeeks.org/php-array_search-function/
 *
 */
$number2 = [9, 2, 5, 1, 6, 5];

$findIndex = array_search("1", $number2);
echo "key = $findIndex\n";

//return only first item index
$findIndex = array_search(5, $number2, true);
echo "key = $findIndex\n";

//strict type checking
$findIndex = array_search("1", $number2, true);
echo "key = $findIndex\n";



/* ******************* "array_key_exists(key, array)" / "key_exists(key, array)"  ************

In PHP, both "array_key_exists()" and "key_exists()" are functions that check whether a specified key exists in an array.

"array_key_exists()" is a built-in PHP function that checks if a given key or index exists in an array.

"key_exists()" is an alias of "array_key_exists()", which means that it is simply another name for the same function. The syntax for "key_exists()" is identical to that of "array_key_exists()"

01- key: Required. Specifies the key
02- array: Required. Specifies the array

 * https://www.php.net/manual/en/function.array-key-exists.php
 * https://www.w3schools.com/php/func_array_key_exists.asp
 *
 */

$arr = ["a" => 12, "b" => 3, "b" => 64, "d" => 94];
if (array_key_exists("b", $arr)) {
    echo "key B is exist\n";
} else {
    echo "key B is not exist\n";
}
//strict type checking
if (key_exists("e", $arr)) {
    echo "key E is exist\n";
} else {
    echo "key E is not exist\n";
}



/* ******************* array_values(array)  ************

 * https://www.php.net/manual/en/function.array-values.php
 * https://www.w3schools.com/php/func_array_values.asp
 * https://www.geeksforgeeks.org/php-array_values-function/
 *
 */

$a = array("Name" => "Peter", "Age" => "41", "Country" => "USA");
print_r(array_values($a));



/* ******************* array_keys(array, value, strict)  ************

 * https://www.w3schools.com/php/func_array_keys.asp
 * https://www.php.net/manual/en/function.array-keys.php
 * https://www.geeksforgeeks.org/php-array_keys-function/
 *
 */

$a = array("Name" => "Peter", "Age" => "41", "Country" => "USA");
print_r(array_keys($a));
