<?php
/******* Important - if...else..(leap year) ******
 * https://www.w3schools.com/php/php_if_else.asp
 * https://www.php.net/manual/en/control-structures.elseif.php
 * 
 * The if...else...elseif statement in PHP is used to make decisions in code. It checks conditions and executes different blocks of code based on whether the conditions are true or false. The basic syntax is: if (condition1) {...} elseif (condition2) {...} else {...}. If condition1 is true, the code inside the first block is executed. If condition1 is false and condition2 is true, the code inside the second block is executed. If all conditions are false, the code inside the else block is executed.
 * 
 * Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.
 
In PHP we have the following conditional statements:
 * if statement - executes some code if one condition is true
 * if...else statement - executes some code if a condition is true and another code if that condition is false
 * if...elseif...else statement - executes different codes for more than two conditions
 * switch statement - selects one of many blocks of code to be executed
*/

/*==================== Leap Year  ===================
 * year is divisible / 4
 * year is divisible / 100
 * year is divisible / 400
*/
$year = 1900;
//01
if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
    echo "{$year} is a leap year\n";
}elseif($year % 4 == 0 && $year % 100 == 0){
    echo "{$year} is not a leap year\n";
}elseif($year % 4 == 0){
    echo "{$year} is a leap year\n";
}else{
    echo "{$year} is not a leap year\n";
}

// ========= Important part
echo "\n";
if(false && false){
    echo "false\n";
}else{
    echo "False && false return false\n";
} 
//
if(true && false){
    echo "true\n";
}else{
    echo "true && false return false\n";
}
//
if(true && true){
    echo "true && true return true\n";
}else{
    echo "false\n";
}
//
if(true || false){
    echo "true || false return true\n";
}else{
    echo "false\n";
}
echo "\n";
//pseudo code for leap year
// 1900 = if(true && (false || false)) -> if(true && false) return false
// 2000 = if(true && (false || true))  -> if(true && true) return true
// 2012 = if(true && (true || false))  -> if(true && true) return true
// 2013 = if(false && (true || false))  -> if(false && true) return false

//02
if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "{$year} is a leap year\n";
}else{
    echo "{$year} is not a leap year\n";
}