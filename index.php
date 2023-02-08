<?php
/* PHP Loops
 * Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.

 * Loops are used to execute the same block of code again and again, as long as a certain condition is true.

 * In PHP, there are four types of loops:
01: for loop - used to repeat a block of code a specified number of times.
02: while loop - used to repeat a block of code while a certain condition is true.
03: do...while loop - similar to while loop, but the code block is executed at least once and then the condition is checked.
04: foreach loop - used to loop through arrays and objects and access their values.

Each of these loops has its own syntax and usage, and you can choose the appropriate loop for your needs based on the type of iteration you want to perform.

 */
//01: for loop
for ( $i = 0; $i < 5; $i += 1 ) {
    echo $i . " For loop\n";
}

echo PHP_EOL;

//02: while loop
$i = 0;
while ( $i < 5 ) {
    echo $i . " While loop\n";
    $i += 1;
}

echo PHP_EOL;

//03: while loop
$i = 1;
do {
    echo $i . " do loop\n";
    $i += 1;
} while ( $i < 5 );

echo PHP_EOL;

$i = 10;
do {
    echo $i . " do loop\n";
    $i += 1;
} while ( $i < 10 );

echo PHP_EOL;

//04: foreach loop
$countries = array( "Bangladesh", "India", "China", "Japan" );
foreach ( $countries as $country ) {
    echo $country . "\n";
}