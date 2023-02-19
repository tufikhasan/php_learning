<?php
/* list() - Array function

In PHP, list() is a language construct that allows you to assign variables in a single statement based on the values of an array or iterable. It is often used as a destructuring feature to extract individual values from an array or iterable and assign them to variables.

 * https://www.w3schools.com/php/func_array_list.asp
 * https://www.php.net/manual/en/function.list.php
 * https://www.geeksforgeeks.org/php-list-function/
 * https://www.javatpoint.com/post/php-array-list-function
 */

//01:
$fruits = array('apple', 'banana', 'orange', 'kiwi');
list($a, $b, $c, $d) = $fruits;
echo "$a, $b, $c, $d \n\n";

//02:
$person = ["Tufik", "Hasan", 25, "Bogura"];
list($fName, $lName) = $person;
echo "My name is $fName $lName\n\n";

//03:
list($x, $y, $z) = ["Bogura", "Dhaka", "Rajshahi"];
echo "$x, $y, $z \n\n";

//04: list() function can also be used with associative arrays, but with some limitations. Since associative arrays do not have a predictable order of keys, you cannot use list() to assign the values of the array to variables based on the key names.
$people = array(
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
);
list($name, $age, $city) = array_values($people);

echo $name . " "; // output: John
echo $age . " "; // output: 30
echo $city . " "; // output: New York
