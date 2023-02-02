<?php
/*
====== A deep dive into printf() ===========
-> https://www.php.net/printf
-> https://www.w3schools.com/php/func_string_printf.asp
*/
$fName = "Tufik";
$lName = "Hasan";
$age = 25;

printf("My firstname %s & lastname %s",$fName,$lName);
echo("\n");

//swapping arguments variables- using single quotation
printf('My name is %2$s %1$s',$fName,$lName);
echo("\n");
printf('My %3$s name is %2$s %1$s',$fName,$lName,"full");

/*
//If use double quotation = Fatal error: Uncaught ValueError: Unknown format specifier " "
printf("My name is %2$s %1$s",$fName,$lName);
*/




