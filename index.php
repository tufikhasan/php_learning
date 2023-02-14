<?php
/*
 ***** Heredoc PHP
Heredoc syntax is used in PHP to define a block of text that can contain any combination of letters, numbers, symbols, and even variables. It allows you to define a large block of text in a single statement, making your code more concise and easier to read.

 * https://www.php.net/manual/en/language.types.string.php

Some common use cases for heredoc syntax in PHP include:

-> Embedding HTML or other markup languages in your code
-> Writing SQL queries or other database-related statements
-> Embedding multiline text strings that would otherwise require cumbersome concatenation with the dot operator
-> Embedding a large block of text in a program or script that will be output to the user or displayed in some other way.

Overall, heredoc syntax can make your PHP code more efficient and easier to read, especially when you need to include large blocks of text.
 */

// ---------- SYNTAX -------
<<<YOUGIVEANYNAME

YOUGIVEANYNAME;

// ============ Started PHP Development Server - OPEN TERMINAL RUN [php -S localhost:8080] COMMAND
//01:
$passion = "laravel developer";
echo <<<EOD
    <h1>Example 01:</h1>
    <p>I am a $passion</p>
    <br/>
    EOD;

//02:
$fullName = <<<HH
    <h1>Example 02:</h1>
    <p>Tufik Hasan</p>
    <br/>
    HH;

echo $fullName;

//03:
$values = [<<<END
a
  b
    c
END,'d e f'];
var_dump( $values );

//04:
echo <<<END
      a
     b
    c
<br/>
END;

//05: Parse error: Invalid body indentation level
// different indentation for body (spaces) ending marker (tabs)

// echo <<<END
//     a
//  b
// c
//     END;