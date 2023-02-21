<?php
/* nl2br($string,xhtml) - Convert newline character to HTML line break
 *
In PHP, the "nl2br()" function is used to convert newline characters "(\n)" to HTML line breaks "(<br>)". This is often used to display text that has been entered by a user with line breaks in a web page.

In normal text editors, the new line is generally denoted by using any of the following.
\n\r
\r\n
\n
\r

 01: string: Required. Specifies the string to check
 02: xhtml: Optional. A boolean value that indicates whether or not to use XHTML compatible line breaks:
    -> TRUE- Default. Inserts <br />
    -> FALSE - Inserts <br>
 *
 * https://www.php.net/manual/en/function.nl2br.php
 * https://www.w3schools.com/php/func_string_nl2br.asp
 * https://www.geeksforgeeks.org/php-nl2br-function/
 */

//01:
echo nl2br("One line.\nAnother line.");

echo "\n\n";

//02:
echo nl2br("One line.\nAnother line.", false);

echo "\n\n";

//03:
echo nl2br("One line.\nAnother line.", true);
