<?php
/*
What does $$ ($$variable) means in PHP ?
The $x (single dollar) is the normal variable with the name x that stores any value like string, integer, float, etc. The $$x (double dollar) is a reference variable that stores the value which can be accessed by using the $ symbol before the $x value. These are called variable variables in PHP.

Variable Variables:- Variable variables are simply variables whose names are dynamically created by another variable’s value.

From the given figure below, it can be easily understood that:
-> $x stores the value "PHP" of String type.
-> Now reference variable $$x stores the value "For PHP"; in it of String type.
*/

// Declare variable and initialize it
$x = "PHP";
// Reference variable
$$x = "For PHP";

/*
So, the value of “for PHP” can be accessed in two ways which are listed below:
-> By using the Reference variable directly. Example: echo $$x;
-> By using the value stored at variable $x as a variable name for accessing the “for PHP” value. Example: echo $PHP; which will give output as “for PHP” (without quote marks).
Examples:
*/

// Display value of x
echo $x;    //output = PHP
echo "\n";

// Display value of $$x ($PHP)
echo $$x;   //output = For PHP
echo "\n";

// Display value of $PHP
echo $PHP;  //output = For PHP
echo "\n";


//===================== example 02 ===================== :
$name = "Tufik";
$$name = "Bogura";
echo "$name hasan lives in $Tufik"; //output = Tufik hasan lives in Bogura
echo "\n";

//===================== example 03 ===================== :
$age = 25;
$word = 'age';
echo $$word;    //output = 25
echo "\n";

//===================== example 04 ===================== :
// Declare variable and initialize it
$var = "PHP";
 
// Reference variable
${$var}="PHPforPHP";
 
// Use double reference variable
${${$var}}="computer science";
 
// Display the value of variable
echo $var . "\n";     //output = PHP
echo $PHP . "\n";    //output = PHPforPHP
echo $PHPforPHP . "\n"; //output = computer science
 
// Double reference
echo ${${$var}}. "\n";   //output = computer science