<?php
/*
====== 01: Print ===========
-> has a return value of 1
-> can take one argument
-> echo is marginally faster than print
-> print statement can be used with or without parentheses: print or print().
*/
$name = "Tufik";
//print statement can be used with or without parentheses: print or print().
print $name;		//output = Tufik
print("\n");
print($name."\n");	//output = Tufik

/*
====== 02: Echo ===========
-> has no return value
-> can take multiple parameters (although such usage is rare)
-> echo is marginally faster than print
-> echo statement can be used with or without parentheses: echo or echo().
*/
$name2 = "Rakib";

//echo statement can be used with or without parentheses: echo or echo().
echo $name2;		//output = Rakib
echo("\n");

echo($name2."\n");	//output = Rakib

//whitespace in echo
$fName = "Tufik";
$lName = "Hasan";
echo "His
name is
{$fName} {$lName},\n
He live in Bogra\n"; 


/*
====== 03: var_dump() ===========
The var_dump() function is used to dump information about a variable. This function displays structured information such as type and value of the given variable.

Arrays and objects are explored recursively with values indented to show structure. This function is also effective with expressions.
*/
$name3 = "Hasan";
$bool = true;


var_dump($name3);	//output = string(5) "Hasan"
echo "\n";
//var_dump() function dumps information about one or more variables.
var_dump($name3,$bool); //output = string(5) "Hasan"  bool(true)


/*
====== 04: printf() ===========
-> https://www.php.net/printf

The printf() function outputs a formatted string.

The arg1, arg2, ++ parameters will be inserted at percent (%) signs in the main string. This function works "step-by-step". At the first % sign, arg1 is inserted, at the second % sign, arg2 is inserted, etc.

Note: If there are more % signs than arguments, you must use placeholders. A placeholder is inserted after the % sign, and consists of the argument- number and "\$". See example two.

Tip: Related functions: sprintf(), vprintf(), vsprintf(), fprintf() and vfprintf()
*/
$fName = "Tufik";
$lName = "Hasan";
$age = 25;

printf("My name is %s",strtoupper($fName));//output = My name is TUFIK
echo PHP_EOL;

printf("His fast name %s and last name is %s",$fName,$lName);//output = His fast name Tufik and last name is Hasan
echo("\n");

printf("My %s name %s %s and my age is %u","full",$fName,$lName,$age);//output = My full name Tufik Hasan and my age is 25
echo PHP_EOL;

printf("My %s name %s %s and my age is %f","full",$fName,$lName,$age);//output = My full name Tufik Hasan and my age is 25.000000
echo("\n");

printf("My name is %s",$fName,$lName);//output = My name is Tufik
echo PHP_EOL; 

//this will show Fatal error: Uncaught ArgumentCountError
printf("My name is %s %s",$fName);




