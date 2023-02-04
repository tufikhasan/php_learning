<?php

/******* PHP switch Statement
 *  The switch statement is similar to a series of IF statements on the same expression. In many occasions, you may want to compare the same variable (or expression) with many different values, and execute a different piece of code depending on which value it equals to. This is exactly what the switch statement is for.
 * 
 *  https://www.php.net/manual/en/control-structures.switch.php
 *  https://www.w3schools.com/php/php_switch.asp
 * 
 ********/
$num = rand(1, 30);
//nested switch case
switch ($num) {
    case (is_integer($num)):
        switch ($num) {
            case ($num > 12):
                echo "$num is Greater then 12\n";
                break;
            case ($num < 12):
                echo "$num is Less then 12\n";
                break;
        }
        break;
    default:
        echo "Invalid number\n";
}

//nested even or odd number - (both negative or positive)
$num = -23;
$r = $num % 2;
switch ($r) {
    case 0:
        switch ($num) {
            case $num > 0:
                echo "{$num} Positive Even number\n";
                break;
            case $num<0:
                echo "{$num} Negative Even number\n";
            break;
        }
        break;
    default:
        switch ($num) {
            case $num > 0:
                echo "{$num} Positive Odd number\n";
                break;
            case $num < 0:
                echo "{$num} Negative Odd number\n";
            break;
        }
}

//even or odd number - (both negative or positive)
$num = -3;
$r = $num % 2;
switch (true) {
    case (0 == $r && $num>0):
        echo "$num is a positive even number";
    break;
    case (1 == $r && $num>0):
        echo "$num is a positive odd number";
    break;
    case (0 == $r && $num<0):
        echo "$num is a negative even number";
    break;
    case (-1 == $r && $num<0):
        echo "$num is a negative odd number";
    break;
}

echo "\n";

//even or odd number - (both negative or positive)
$num = -3;
$r = abs($num) % 2;
switch (true) {
    case (0 == $r && $num>0):
        echo "$num is a positive even number";
    break;
    case (1 == $r && $num>0):
        echo "$num is a positive odd number";
    break;
    case (0 == $r && $num<0):
        echo "$num is a negative even number";
    break;
    case (1 == $r && $num<0):
        echo "$num is a negative odd number";
    break;
}
