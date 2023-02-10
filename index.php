<?php
/* Fibonacci Series using for Loops */

/* 01:pseudo code

initial value:
-> veryOld = 0
-> oldest = 1
-> newest = 1

first loop:
-> veryOld = 1
-> oldest = 1
-> newest = 1 (0 + 1 = 1)

second loop:
-> veryOld = 1
-> oldest = 1
-> newest = 2 (1 + 1 = 2)

third loop:
-> veryOld = 2
-> oldest = 2
-> newest = 3 (1 + 2 = 3)

forth loop:
-> veryOld = 3
-> oldest = 3
-> newest = 5 (2 + 3 = 5)

fifth loop:
-> veryOld = 5
-> oldest = 5
-> newest = 8 (3 + 5 = 8)

 */
$veryOld = 0;
$oldest = 1;
$newest = 1;
for ( $i = 0; $i < 10; $i++ ) {
    echo $veryOld . ", ";
    $oldest = $newest;
    $newest = $veryOld + $oldest;
    $veryOld = $oldest;
}

echo PHP_EOL;

//02:
$starting = 0;
$old = 1;
for ( $i = 0; $i < 10; $i++ ) {
    echo $starting . ", ";
    $new = $starting + $old;
    $old = $starting;
    $starting = $new;
}