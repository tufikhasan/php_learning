<?php
/* PHP Break and Continue
 * The "break" and "continue" statements in PHP are used inside loop structures to control the flow of execution.
 *
 * * "break" is used to terminate a loop prematurely. When a break statement is encountered inside a loop, the loop is immediately exited and the code after the loop is executed.
 *
 * * "continue" is used to skip an iteration of a loop. When a continue statement is encountered inside a loop, the current iteration is skipped and the next iteration begins. For example:

 * https://www.php.net/manual/en/control-structures.continue.php
 * https://www.php.net/manual/en/control-structures.break.php
 * https://www.w3schools.com/php/php_looping_break.asp

 */
//break example 01: The break statement can also be used to jump out of a loop.
echo "================ Break example 01 ======================\n";
for ( $i = 1; $i <= 10; $i++ ) {
    if ( 5 == $i ) {
        break;
    }
    echo "The number is: {$i}\n";
}
//break example 02: The break statement can also be used to jump out of a loop.
echo "\n============Break example 02 ================\n";
for ( $i = 1; $i <= 10; $i++ ) {
    echo "The number is: {$i}\n";
    if ( 5 == $i ) {
        break;
    }
}
//continue example 01: This example skips the value of = 2
echo "\n============Continue example 01 ================\n";
for ( $i = 1; $i <= 5; $i++ ) {
    if ( 2 == $i ) {
        continue;
    }
    echo "The number is: {$i}\n";
}
//continue example 02: This example won't work because it uses the condition after the echo
echo "\n============Continue example 02 ================\n";
for ( $i = 1; $i <= 5; $i++ ) {
    echo "The number is: {$i}\n";
    if ( 2 == $i ) {
        continue;
    }
}
//continue example 03: Skips all even number
echo "\n============Continue example 03 ================\n";
for ( $i = 1; $i <= 5; $i++ ) {
    if ( $i % 2 == 0 ) {
        continue;
    }
    echo "The odd number is: {$i}\n";
}

echo "\n";

for ( $i = 1; $i <= 5; $i++ ) {
    if ( !( $i % 2 ) ) {
        continue;
    }
    echo "The odd number is: {$i}\n";
}

//continue example 04: Skips all even number
echo "\n============Continue example 04 ================\n";
$num = 1;
while ( $num <= 5 ) {
    if ( !( $num % 2 ) ) {
        $num++;
        continue;
    }
    echo "The odd number is: {$num}\n";
    $num++;
}