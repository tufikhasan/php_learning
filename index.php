<?php
/*
PHP Variables Scope:
In PHP, variables can be declared anywhere in the script.
The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes:
-> local
-> global
-> static
*/

//============ 01- Local Scope ==========
function myLocal() {
    $x = 5; // local scope
    echo "Variable x inside function is: $x"."\n";
  }
  myLocal();
  // using x outside the function will generate an error
  echo "Variable x outside function is: $x"."\n";


//============ 02.1- Global not accessed in function ==========
// A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

$x = 5; // global scope

function myGlobal() {
  // using x inside this function will generate an error: Undefined variable $x in
  //echo "<p>Variable x inside function is: $x</p>."\n"";
}
myGlobal();

echo "<p>Variable x outside function is: $x</p>"."\n";




//============ 02.2- PHP The global Keyword ==========
/*
The global keyword is used to access a global variable from within a function.
To do this, use the global keyword before the variables (inside the function):
*/
$x = 5;
$y = 10;

function globalKeyword() {
  global $x, $y;
  $y = $x + $y;
}

globalKeyword();
echo $y."\n"; // outputs 15

/*
PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

The example above can be rewritten like this:
*/
$a = 30;
$b = 10;

function globalKeyword2() {
  $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

globalKeyword2();
echo $b."\n"; // outputs 15




//============ 03- PHP The static Keyword ==========
/*
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

To do this, use the static keyword when you first declare the variable:
*/
function varStaticScope() {
    static $s = 0;
    echo $s."\n";
    $s++;
  }
  
  varStaticScope();
  varStaticScope();
  varStaticScope();