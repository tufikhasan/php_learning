<?php
/* For loop Multiple Stepping*/

//01:
for ( $i = 1, $j = 2; $i < 10; $i += 2, $j += 2 ) {
    echo "Odd number is {$i} and even number is {$j}\n";
}

echo "\n\n";

//02:
for ( $i = 10, $j = 1; $i > 0; $i--, $j++ ) {
    echo $i . "-" . $j . "\n";
}

echo "\n\n";

//03:
for ( $i = 0, $j = 0; $i < 100, $j < 100; $i += 7, $j += 11 ) {
    echo "I = {$i} and J = {$j}\n";
}