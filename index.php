<?php
/* ********************* include_once - embed PHP code from another file ************
 * The include_once keyword is used to embed PHP code from another file. If the file is not found, a warning is shown and the program continues to run. If the file was already included previously, this statement will not include it again.
 *
 * https://www.w3schools.com/php/keyword_include_once.asp
 * https://www.php.net/manual/en/function.include-once.php
 */

//include function.php file
include_once "function.php";

$x = 8;
if ( isEven( $x ) ) {
    echo "{$x} is an Even number";
} else {
    echo "{$x} is an Odd number";
}