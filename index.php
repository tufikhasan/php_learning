<?php
/******* if...else...elseif Statements ******
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

//even odd number
$number = rand(1,50);   //get a random number between 1 to 50
if($number % 2 === 0){
    echo "$number is even number\n";
}else{
    echo "$number is odd number\n";
}

//example 01
$a = 30;
$b = 20;
if($a == $b){
    echo "$a is equal to $b\n";
}elseif($a > $b){
    echo "$a is greater then $b\n";
}elseif($a < $b){
    echo "$a is less then $b\n";
}
//If the check first statement matches then don't check the conditions below
$a = 20;
$b = 20;
if($a >= $b){
    echo "$a is a same or greater then $b\n";
}elseif($a > $b){
    echo "$a is greater then $b\n";
}elseif($a < $b){
    echo "$a is less then $b\n";
}elseif($a == $b){
    echo "$a is equal to $b\n";
}

//age check
$age = rand(1,70);
if($age >= 13 && $age <=19){
    echo "Your age is $age years old, You are a teenager\n";
}elseif($age < 13){
    echo "Your age is $age years old, You are a child\n";
}elseif($age > 19 && $age <= 45){
    echo "Your age is $age years old, You are a young man\n";
}else{
    echo "Your age is $age years old, You are an old man\n";
}