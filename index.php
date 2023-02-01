<?php
/*
PHP line break:
*/
//01: \r\n -- Newline characters \r\n can be used to create a new line inside the source code.
echo "Tufik " ."\r\n"."Loves Programming\r\n";
//02: \n -- Newline characters \n can be used to create a new line inside the source code.
echo "Tufik " ."\n"."Loves Programming\n";
//03: PHP_EOL -- representing a line break in a platform-independent way.
echo "Tufik " .PHP_EOL."Loves Programming".PHP_EOL;
//04: <br> -- The <br> tag in HTML is used to give the single line break. It is an empty tag, so it does not contain an end tag.
echo "Tufik ". "<br>". "Loves Programming\n";

/*
05: nl2br() -- is a PHP function that converts newline characters (line breaks) to HTML line break elements <br> in a string. It is used to format plain text into HTML-formatted text by preserving line breaks, which would otherwise be ignored by HTML. The nl2br function can be useful for displaying the contents of a textarea form input or the output of a text-based file in an HTML page.
*/
$text = "This is line 1.\nThis is line 2.";
echo nl2br($text);




