<?php
/* range(start, end, step) - Array function

In PHP, the range() function is used to create an array containing a range of elements between a specified starting and ending point. The function takes two or three arguments:

 * https://www.php.net/manual/en/function.range.php
 * https://www.w3schools.com/Php/func_array_range.asp
 * https://www.geeksforgeeks.org/php-range-function/
 * https://www.javatpoint.com/post/php-array-range-function
 */

//01:
$numbers = range(1, 5);
print_r($numbers);

//02:
$oddNumber = range(1, 10, 2);
print_r($oddNumber);

echo "\n\n";

//03:
$nums = range(0, 5);
foreach ($nums as $num) {
    echo "$num, ";
}

echo "\n\n";

//04:
$nums = range(0, 50, 7);
foreach ($nums as $value) {
    if ($value > 0) {
        echo "$value, ";
    }
}
