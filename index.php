<?php
/******* Important - if...else condition practice ******
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

//==================== Important steps ===================
//01
$food = "tuna";
if($food == "tuna"){
    echo "It has vitamins D\n";
}else{
    echo "We don't know if {$food} contains Vitamin D\n";
}
//02
$food = "apple";
if($food = "tuna"){ //this is return true. Assigns a value to the variable $food as tuna
    echo "It has vitamins D\n";
}else{
    echo "We don't know if {$food} contains Vitamin D\n";
}
//03
$food = "apple";
if("tuna" == $food){ //Always use static values on the left side of the condition
    echo "It has vitamins D\n";
}else{
    echo "We don't know if {$food} contains Vitamin D\n";
}

/* 
04: Best practice to Always use static values on the left side of the condition. An handle error
$food = "apple";
if("tuna" = $food){ //it's return syntax error.
    echo "It has vitamins D\n";
}else{
    echo "We don't know if {$food} contains Vitamin D\n";
}
*/

//03
$food = "salmon";
if("tuna" == $food || "salmon" == $food){
    echo "It has vitamins D\n";
}else{
    echo "We don't know if {$food} contains Vitamin D\n";
}