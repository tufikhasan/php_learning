<?php
/* strtok( $string,$delimiters )
 *
"strtok()" is a string function in PHP that is used to tokenize a string. The function takes two arguments: the first argument is the input string to be tokenized, and the second argument is a string containing a list of delimiter characters.

The "strtok()" function returns a string token from the input string, where each token is defined as a sequence of characters delimited by one of the characters in the delimiter string. The function keeps track of the position within the input string where the last token ended, so that subsequent calls to "strtok()" can continue tokenizing the input string from where the previous call left off.
 *
 * https://www.w3schools.com/php/func_string_strtok.asp
 * https://www.php.net/manual/en/function.strtok.php
 * https://www.geeksforgeeks.org/php-strtok-for-tokening-string/
 */

//01:
// $name = "My name is Tufik Hasan";
// $token = strtok( $name, " " );
// while ( $token !== false ) {
//     echo $token . PHP_EOL;
//     $token = strtok( " ," );
// }

//02:
// $string = "The quick brown fox,jumped over the lazy-dog";
// $token = strtok( $string, " " );
// while ( $token !== false ) {
//     echo $token . PHP_EOL;
//     $token = strtok( " " );
// }

//03:
// $string = "The quick brown fox,jumped over the lazy-dog";
// $token = strtok( $string, " ," );
// while ( $token !== false ) {
//     echo $token . PHP_EOL;
//     $token = strtok( " ," );
// }

//03:
$string = "The quick-brown fox,jumped over the lazy-dog";
$token = strtok( $string, " ,-" );
while ( $token !== false ) {
    echo $token . PHP_EOL;
    $token = strtok( " ,-" );
}
