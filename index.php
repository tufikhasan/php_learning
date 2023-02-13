<?php
/* PHP Foreach loop
 * The foreach loop in PHP is a control structure that allows you to iterate over arrays and objects, and execute a block of code for each element in the array or object.
 * Where condition is a boolean expression that determines whether to continue or end the loop. The code inside the loop will be executed, and then the condition will be evaluated. If the condition is true, the loop will repeat; if the condition is false, the loop will terminate.
 * https://www.php.net/manual/en/control-structures.foreach.php
 * https://www.w3schools.com/php/php_looping_foreach.asp
 */

//01: In PHP, you can use the foreach loop to iterate over arrays and objects and access both the key and the value of each element.
$students = [
    "name"    => "Tufik",
    "age"     => 25,
    "address" => "Bogura",
];
foreach ( $students as $key => $value ) {
    echo "$key = $value\n";
}

echo PHP_EOL;
//02:
$students = array(
    ["name"   => "Tufik",
        "age"     => 25,
        "address" => "Bogura",
    ],
    ["name"   => "Rakib",
        "age"     => 32,
        "address" => "Dhaka",
    ],
);
foreach ( $students as $student ) {
    static $count;
    $count++;
    echo "{$count}:{$student['name']} age is {$student['age']} lives in {$student['address']}\n";
}