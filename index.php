<?php
/* Accessing characters within a string */

$name = "Tufik Hasan";
echo $name . PHP_EOL;

echo $name[0] . PHP_EOL; //output = T

echo $name[6] . PHP_EOL; //output = H

echo $name[-4] . PHP_EOL; //output = a

echo $name[-1] . PHP_EOL; //output = n

//update string character
$name[5] = "_";
echo $name . PHP_EOL;
