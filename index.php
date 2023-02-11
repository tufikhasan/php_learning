<?php
/* ********************* Dividing a large function into smaller functions */

//01: larger function
function largeFunction() {
    echo ( 2 + 3 ) . "\n";
    echo ( 6 - 3 ) . "\n";
    echo ( 2 * 3 ) . "\n";
    echo ( 6 / 3 ) . "\n";
}
largeFunction();

echo PHP_EOL;

//02: divided large function into smaller function
function sum() {
    echo ( 2 + 3 ) . "\n";
}
function sub() {
    echo ( 6 - 3 ) . "\n";
}
function multiplication() {
    echo ( 2 * 3 ) . "\n";
}
function division() {
    echo ( 6 / 3 ) . "\n";
}

function dividedLargeFun() {
    sum();
    sub();
    multiplication();
    division();
}
dividedLargeFun();