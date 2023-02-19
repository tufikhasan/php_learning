<?php
/* mt_rand(min,max) , rand(min,max) - Array function

In summary, if you require a higher quality of randomness and more secure random numbers, you should use "mt_rand()" instead of "rand()". However, if you need a quick and simple way to generate random numbers for non-cryptographic purposes, "rand()" may be sufficient.

 * https://www.w3schools.com/php/func_math_mt_rand.asp
 * https://www.php.net/manual/en/function.mt-rand.php
 */

//01:
echo rand(1, 10) . PHP_EOL;
echo mt_rand(1, 10) . PHP_EOL;

//02:
$num = range(1, 30);
// count($num) . PHP_EOL; //30
$random = mt_rand(0, 29);

echo $num[$random] . PHP_EOL;

//03:
if ($num[$random] % 2 == 0) {
    echo "Tail\n";
} else {
    echo "Head\n";
}
