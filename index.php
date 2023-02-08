<?php
/* PHP While loop
 * The "while" loop in PHP is used to execute a block of code repeatedly as long as a certain condition is met.
 * The condition in the parentheses is evaluated before each iteration of the loop. If the condition is true, the code inside the loop is executed. Once the condition becomes false, the loop will terminate and the program will continue with the next line of code after the loop.

 * https://www.php.net/manual/en/control-structures.while.php
 * https://www.w3schools.com/php/php_looping_while.asp

 */
//01:
$i = 0;
while ( $i < 5 ) {
    echo $i . "\n";
    $i++;
}

//02:
echo "\nLoop reverse 5 to 1\n";
$i = 5;
while ( $i > 0 ) {
    echo $i . "\n";
    $i--;
}

//03:
echo "\n==============\n";
$i = 0;
while ( $i++ < 5 ) {
    echo $i . "\n";
}

//03:
echo "\n==============\n";
$i = 0;
while ( ++$i < 5 ) {
    echo $i . "\n";
}

//03: Break - when i value is equal 2 break ends execution of the current structure
echo "\n\nBreak loop if number is 2\n";
$i = 0;
while ( $i < 5 ) {
    if ( 2 == $i ) {
        break;
    }
    echo $i . "\n";
    $i++;

}

//05: Continue - skip the current iteration of the loop and continue with the next iteration
echo "\nSkip even number and continue loop\n";
$i = 1;
while ( $i < 10 ) {
    if ( $i % 2 == 0 ) {
        $i++;
        continue;
    }
    echo $i . "\n";
    $i++;

}