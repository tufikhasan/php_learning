<?php
/* count() - sizeof() - array_count_values() - array_unique()  */


$arr = array(
    "Java" => array(
        "SpringBoot",
        "Eclipse"
    ),
    "Python" => array(
        "Django"
    ),
    "PHP" => array(
        "CodeIgniter"
    )
);
/* ************** count(arr, mode) ************

count() method: The count() method is used to calculate all the elements in the array or any other countable object. It can be used for both uni-dimensional as well as multi-dimensional arrays. 

Parameters: This method accepts two parameters that are discussed below:

arr: The array to count the elements.
mode: Indicator to check whether or not to count all the elements –
    0 – Default. Does not count all elements of multidimensional arrays
    1 – Counts the array recursively (counts all the elements of multidimensional arrays)

 * https://www.w3schools.com/php/func_array_count.asp
 * https://www.php.net/manual/en/function.count.php
 * https://www.geeksforgeeks.org/what-is-the-different-between-count-and-sizeof-functions-in-php/
 */
echo "Count Sub elements of an array: " . count($arr) . "\n";
echo "Count All elements of an array: " . count($arr, 1) . "\n\n";




/* ************** sizeof(arr, mode) ************

sizeof() method: The sizeof() method is used to calculate all the elements present in an array or any other countable object. It can be used for both uni-dimensional as well as multi-dimensional arrays. 

Parameters: This method accepts two parameters that are discussed below:

arr: The array to count the elements.
mode: Indicator to check whether or not to count all the elements –
    0 – Default. Does not count all elements of multidimensional arrays
    1 – Counts the array recursively (counts all the elements of multidimensional arrays)

 * https://www.w3schools.com/php/func_array_sizeof.asp
 */
echo "Sizeof Sub elements of an array: " . sizeof($arr) . "\n";
echo "Sizeof All elements of an array: " . sizeof($arr, 1) . "\n\n";




/* ************** array_count_values(array) ************

array_count_values() is a PHP function that takes an array as its parameter and returns an associative array containing the count of each unique value in the original array.

The function counts the occurrences of each value in the array and returns an associative array with the keys being the unique values found in the input array, and the values being the number of times each value was found.

 * https://www.php.net/manual/en/function.array-count-values.php
 * https://www.w3schools.com/php/func_array_count_values.asp
 * https://www.geeksforgeeks.org/php-array_count_values-function/
 */
$array = array("Geeks", "for", "Geeks", "Geeks", "Welcome", "for");
$arrayValueCount = array_count_values($array);
print_r($arrayValueCount);


/* ************** array_unique($array, $flags) ************

"array_unique()" is a PHP function that takes an array as its parameter and returns a new array containing only the unique values from the input array.

The function removes all duplicate values from the input array and returns a new array with only the unique values. The order of the elements is preserved in the new array.

01- array: The input array.
02- flags: The optional second parameter flags may be used to modify the comparison behavior using these values:
    Comparison type flags:
     -> SORT_REGULAR - compare items normally (don't change types)
     -> SORT_NUMERIC - compare items numerically
     -> SORT_STRING - compare items as strings
     -> SORT_LOCALE_STRING - compare items as strings, based on the current locale.

 * https://www.php.net/manual/en/function.array-unique.php
 * https://www.w3schools.com/php/func_array_unique.asp
 */

//01:
$fruits = array('apple', 'banana', 'orange', 'apple', 'banana', 'kiwi', 'banana');
$unique_fruits = array_unique($fruits);
print_r($unique_fruits);

//02:
$arr = array("a" => "MH", "b" => "JK", "c" => "JK", "d" => "OR");
print_r(array_unique($arr));
