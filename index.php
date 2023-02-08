<?php
/* PHP For loop
 * A for loop in PHP is a type of loop that allows you to execute a block of code a specified number of times. It consists of the following parts:
-> Initialization: Initializing a counter variable with a starting value.
-> Conditional Expression: Checking the counter variable against a value to see if the loop should continue to execute.
-> Increment/Decrement: Updating the counter variable after each iteration of the loop.

 * https://www.w3schools.com/php/php_looping_for.asp
 * https://www.php.net/manual/en/control-structures.for.php

 */
//01:
for ( $i = 0; $i < 5; $i += 1 ) {
    echo $i . "\n";
}

//02:
echo "\nLoop reverse 5 to 1";
for ( $i = 5; $i > 0; $i -= 1 ) {
    echo $i . "\n";
}

//03: nested loop
echo "\nNested loop";
for ( $i = 1; $i < 5; $i++ ) {
    echo "\n";
    for ( $j = 0; $j < $i; $j++ ) {
        echo "*";
    }
}

//04: Break - when i value is equal 2 break ends execution of the current structure
echo "\n\nBreak loop if number is 2\n";
for ( $i = 0; $i < 5; $i++ ) {
    if ( 2 == $i ) {
        break;
    }
    echo $i . "\n";

}

//05: Continue - skip the current iteration of the loop and continue with the next iteration
echo "\nSkip even number and continue loop\n";
for ( $i = 1; $i < 10; $i++ ) {
    if ( !( $i % 2 ) ) {
        continue;
    }
    echo $i . "\n";

}