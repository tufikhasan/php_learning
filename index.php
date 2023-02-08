<?php
/* PHP Do While loop
 * The do...while loop in PHP is a control structure that allows you to execute a block of code repeatedly, as long as the specified condition is true. Unlike the while loop, the do...while loop is guaranteed to execute at least once, since the condition is only checked at the end of each iteration.
 * Where condition is a boolean expression that determines whether to continue or end the loop. The code inside the loop will be executed, and then the condition will be evaluated. If the condition is true, the loop will repeat; if the condition is false, the loop will terminate.

 * https://www.php.net/manual/en/control-structures.do.while.php
 * https://www.w3schools.com/php/php_looping_do_while.asp

 */
//01:
$i = 0;
do {
    echo $i . "\n";
    $i++;
} while ( $i < 5 );

//02:
echo "\nLoop reverse 5 to 1\n";
$i = 5;
do {
    echo $i . "\n";
    $i--;
} while ( $i > 0 );

//03:
echo "\n==============\n";
$i = 10;
do {
    echo $i . "\n";
    $i++;
} while ( $i < 5 );