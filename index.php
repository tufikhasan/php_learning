<?php
/* ********************* Variable Scope in PHP Function
 *
In PHP, variables can be declared anywhere in the script.
The scope of a variable is the part of the script where the variable can be referenced/used.
PHP has three different variable scopes:
 *
 * https://github.com/tufikhasan/php_learning/blob/b5b78ea3b65987a3f2a202cd5dd24d0ce1938582/index.php
 *
-> local
-> global
-> static
 */

//================ Global scope ======================
$name = "Tufik Hasan";
//01:
// function myName1() {
//     echo $name; //you cannot access global variable inside a function return error
// }
// myName1();

//02:
function myName2() {
    global $name;
    echo $name . "\n"; //you can access global variable inside a function using GLOBAL KEYWORD
}
myName2();

//03:
function myName3() {
    echo $GLOBALS['name'] . "\n"; //you can access global variable inside a function using $GLOBALS[] array
}
myName3();

//================ Local scope ======================
//01:
function localScope() {
    $fruit = "mango";
    echo $fruit . "\n";
}
localScope();
//echo $fruit; //you cannot access local variable outside a function return error

//01:
function localScope2() {
    global $fruit;
    $fruit = "mango";
    echo $fruit . "\n";
}
localScope2();
echo $fruit . "\n"; //you can access local variable outside a function using GLOBAL KEYWORD

//================ Static scope ======================
function numIncrement() {
    static $i;
    $i++;
    echo $i . "\n";
}
// echo $i . "\n"; //you can access return Undefined variable

function doExtra() {
    static $i;
    $i++;
    echo $i . "\n";
}

numIncrement();
numIncrement();
doExtra();
numIncrement();
doExtra();
numIncrement();
