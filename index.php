<?php
/******* Nested - If...else...elseif ******
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

$condition1 = true;
$condition2 = true;
$condition3 = true;
//Nested - If...else
if($condition1){
    if($condition2){
        if($condition3){
            echo "All condition true\n";
        }else{
            echo "Condition 3 not found \n";
        }
    }else{
        echo "Condition 2 not found \n";
    }
}else{
    echo "Condition 1 not found \n";
}

//If...else...elseif
if($condition1 && $condition2 && $condition3){
    echo "All condition true\n";
}elseif($condition1 && $condition2){
    echo "Condition 3 not found \n";
}elseif($condition1){
    echo "Condition 2 not found \n";
}else{
    echo "Condition 1 not found \n";
}