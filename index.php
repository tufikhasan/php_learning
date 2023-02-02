<?php
/*
====== A deep dive into printf() ===========
-> https://www.php.net/printf
-> https://www.w3schools.com/php/func_string_printf.asp
*/
$fName = "Tufik";
$lName = "Hasan";
$age = 25;

//swapping
printf('My name is %2$s %1$s',$fName,$lName);
echo("\n\n");

//same argument print multiple time
printf('Decimal = %1$d, Binary = %1$b',$age);
echo("\n\n");


// decimal print
$n = 25.154;
printf('%.2f',$n);
echo("\n");

$n = 25.15664;
printf('%.3f',$n);
echo("\n\n");

// padding 5
$n = 123;
$m = 78;
printf("%05d \n",$n);
printf("%05d \n",$m);

echo("\n");

//0 padding with decimal
$n = 123.34;
$m = 78.56;
printf("%07.2f \n",$n);
printf("%07.2f \n",$m);


