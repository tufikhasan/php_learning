<?php
/* wordwrap ($str, $width, $break, $cut )
 *
Wraps a string to a given number of characters using a string break character.

Here's what each parameter means:
-> "$str" (required): The input string to wrap.
-> "$width" (required): The number of characters at which to wrap the string.
-> "$break" (optional): The character or string to use for line breaks. The default value is "\n" (newline).
-> "$cut" (optional): A boolean flag indicating whether to cut words that are longer than the specified width. The default value is false.

Note: This function may leave white spaces at the beginning of a line.

 *
 * https://www.php.net/manual/en/function.wordwrap.php
 * https://www.geeksforgeeks.org/php-wordwrap-function/
 * https://www.w3schools.com/php/func_string_wordwrap.asp
 */

//01:
$str = "The function returns a string wrapped upto specified length";
$wrap = wordwrap( $str, 30 );
echo $wrap;

echo "\n\n";

//02:
$str = "readerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
$wrap = wordwrap( $str, 30 );
echo $wrap;

echo "\n\n";

//03:
$str = "readerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
$wrap = wordwrap( $str, 30, "\n", true );
echo $wrap;

//04: Use <br/> for browser
// $str = "It is a long established fact that a readerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr will be distracted by the readable content of a page when looking at its layout";
// $wrap = wordwrap( $str, 30, "<br />", true );
// echo $wrap;
