<?php
/* How to Write Strings Differently in PHP -- 

 -> https://www.php.net/manual/en/language.types.string.php

 */

//01: Single-quoted string:
//Single-quoted strings are simpler and do not support escape sequences or variable interpolation. They are defined using single quotes (').
$name = "Tufik";
echo 'My name is  $name . This is a single-quoted string.';

echo "\n\n";

//02: Double-quoted string::
//Double-quoted strings in PHP allow for the use of escape sequences to include special characters and variables. They are defined using double quotes (").
$name = "Tufik";
echo "My name is $name. This is a double-quoted string.";

echo "\n\n";

//03: Heredoc string:
//Heredoc syntax allows for the creation of a string with multiple lines and variables without the need for concatenation or escape sequences. Heredoc syntax begins with <<< followed by an identifier, and ends with the same identifier on a new line. The identifier can be any valid label name, and must not be indented.
$name = "Tufik";
$age = 30;
$message = <<<EOT
My name is $name.
I am $age years old.
This is a heredoc string.
EOT;

echo $message;

echo "\n\n";

//04: Nowdoc string:
//Nowdoc syntax is similar to Heredoc, but it does not allow for variable interpolation or escape sequences. It is defined using single quotes (') and the same syntax as Heredoc, but with '<<<' instead of '<<'.
$name = "Tufik";
$age = 30;
$message = <<<'EOT'
My name is $name.
I am $age years old.
This is a nowdoc string.
EOT;

echo $message;
