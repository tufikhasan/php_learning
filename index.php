<?php
/*
Mixing a PHP variable with a string literals
*/
$firstName = "Tufik";
$lastName = "Hasan";
$age = 25;

echo "My firstname is".$firstName;  //output = My firstname isTufik
echo "\n";

echo "My age is ".$age;  //output = My age is 25
echo "\n";

echo "My lastname is"." ".$lastName;  //output = My lastname is Hasan
echo "\n";

//Variable values are not shown in string when using single quotation
echo 'My name is $firstName';  //output = My firstname is $firstName
echo "\n";

//Variables can be shown in strings using double quotation
echo "My name is $firstName";  //output = My firstname is Tufik
echo "\n";

//use curly brackets in php string literals
$var = "way";
echo "Two {$var} to define a variable in a string.";    //output = Two way to define a variable in a string.
echo "\n";
echo "Two {$var}s to define a variable in a string.";   //output = Two ways to define a variable in a string.
echo "\n";

echo "My full name is {$firstName} {$lastName}";    //output = My full name is Tufik Hasan
