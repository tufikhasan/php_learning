<?php

/******* PHP switch Statement
 *  The switch statement is similar to a series of IF statements on the same expression. In many occasions, you may want to compare the same variable (or expression) with many different values, and execute a different piece of code depending on which value it equals to. This is exactly what the switch statement is for.
 * 
 *  https://www.php.net/manual/en/control-structures.switch.php
 *  https://www.w3schools.com/php/php_switch.asp
 * 
********/
$num = rand(1,30);

//even or odd number
$r = $num % 2;
switch($r){
    case 0:
        echo "Even number\n";
    break;
    default:
    echo "Odd number\n";
}
//Multiple case in the same output 
$fruits = "apple";
switch($fruits){
    case "apple":
    case "mango":
    echo "Mango and apple both are fruits\n";
    break;
    case "orange":
        echo "Orange is good for health\n";
    break;
    default:
    echo "Please type apple,mango or orange\n";     
}
//check number or not
switch($num){
    case is_integer($num):
        echo "Number\n";
    break;
    default:
    echo "Not a number\n";
}

//bigger number  
$num1 = 45;
$num2 = 65;
$num3 = 30;
switch(true){
    case ($num1 > $num2 && $num1 > $num3):
        echo "Larger number is {$num1}\n";
    break;
    case ($num2 > $num3):
        echo "Larger number is {$num2}\n";
    break;
    default:
    echo "Larger number is {$num3}\n";
}