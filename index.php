<?php
/*
 *************  String to Array and Array to String, Multiple Delimiters **********
Converting a PHP string to an array can be done using the explode function, while converting an array to a string can be done using the implode function.

 * https://www.javatpoint.com/array-to-string-conversion-in-php
 *

 */
//----------- Default String -------------
$string = "Tomato, Capsicum, Pumpkin";

//----------- String to Array -------------
$vegetablesArray = explode( ', ', $string );
print_r( $vegetablesArray );

//----------- Array to String -------------
$vegetablesString = implode( ', ', $vegetablesArray );
echo $vegetablesString . PHP_EOL;

//----------- Array to String -------------
$vegetablesString2 = join( '-', $vegetablesArray );
echo $vegetablesString2 . PHP_EOL . PHP_EOL;

//----------- Multiple Delimiters -------------
$s = "A, D, C,D";
$arr = explode( ', ', $s );
echo count( $arr ) . PHP_EOL; //It will return 3 but $s has 4 items. This is a problem

$arr2 = preg_split( '/(, |,)/', $s );
echo count( $arr2 ); //It will return 4
