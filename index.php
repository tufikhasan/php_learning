<?php

/******* PHP Ternary Operators & Nested Ternary Operators
 *  The PHP ternary operator is a shorthand way of writing a simple if-else statement. It takes an expression and returns one of two values based on whether the expression is true or false. This allows for concise and readable coding, especially when used in conjunction with expressions that evaluate to simple values.
 * 
 *  https://www.php.net/manual/en/language.operators.comparison.php
 *  https://www.phptutorial.net/php-tutorial/php-ternary-operator/
 * 
********/
$num = rand(1,30);

//check number or not
$result = (is_integer($num)? "number":"Invalid number");
echo $result."\n";

//even or odd number
$result = (($num % 2 == 0)? "Even number":"Odd number");
echo $result."\n";

//nested ternary   -- Try using the nested ternary operator wrap parentheses ().
$result = (is_integer($num)? (($num > 12)? "$num is Greater then 12": "$num is less then 12"):"Invalid number");
echo $result."\n";

//bigger number   -- Try using the nested ternary operator wrap parentheses ().   
$num1 = 45;
$num2 = 65;
$num3 = 70;
$result = (($num1 > $num2 && $num1 > $num3)? "Larger number is {$num1}":(($num2 > $num3)? "Larger number is {$num2}":"Larger number is {$num3}"));
echo $result."\n";