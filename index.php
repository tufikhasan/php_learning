<?php

/******* Operator Precedence in PHP
 * In PHP, operator precedence determines the order in which operations are performed in an expression. Just like in mathematics, some operations are performed before others.
 * https://www.php.net/manual/en/language.operators.precedence.php
 * ********/

$a = false || true; //this higher order operator = true
$b = false or true; // [($b = false) or true / $b = false]
var_dump($a,$b);

$a = true && false; // //this higher order operator = false
$b = true and false; // [($b = true) and false / $b = true]
var_dump($a,$b);