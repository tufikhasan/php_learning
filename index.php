<?php
/* * Discussion of Empty Values - isset(),empty()
 *
 * ------------------------ isset(): ------------------------
The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.

This function returns true if the variable exists and is not NULL, otherwise it returns false.

Note: If multiple variables are supplied, then this function will return true only if all of the variables are set.

Tip: A variable can be unset with the unset() function.

 *
 * ------------------------ empty(): ------------------------
The empty() function checks whether a variable is empty or not.
This function returns false if the variable exists and is not empty, otherwise it returns true.

The following values evaluates to empty:
-> 0
-> 0.0
-> "0"
-> ""
-> NULL
-> FALSE
-> array()

 *
 */

//example 01:
$a = "";
//check if the variable $a is set or not
if ( isset( $a ) ) {
    echo "Variable \$a is set\n";
} else {
    echo "Variable \$a is not set\n";
}
//Check the variable $a is empty or not
if ( empty( $a ) ) {
    echo "Variable \$a is empty\n";
} else {
    echo "Variable \$a is not empty\n";
}

//example 02:
$b = 0;
//check if the variable $b is set or not
if ( isset( $b ) ) {
    echo "Variable \$b is set\n";
} else {
    echo "Variable \$b is not set\n";
}
//Check the variable $b is empty or not
if ( empty( $b ) ) {
    echo "Variable \$b is empty\n";
} else {
    echo "Variable \$b is not empty\n";
}

//example 03:
$c = 0;
//check if the variable $b is set or not
if ( isset( $c ) && ( is_numeric( $c ) && $c != "" ) ) {
    echo "Variable \$c is set & it's not empty\n";
} else {
    echo "Variable \$c is set & it's empty\n";
}

//example 03:
$d = 0;
//check if the variable $b is set or not
if ( isset( $d ) && ( is_numeric( $d ) && $d > 0 ) ) {
    echo "Variable \$d is set with valid value\n";
} else {
    echo "Variable \$d is set but it's not valid\n";
}