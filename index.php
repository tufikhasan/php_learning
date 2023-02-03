<?php
/*
====== PHP String functions ===========
The PHP string functions are part of the PHP core. No installation is required to use these functions.

-> https://www.w3schools.com/php/php_ref_string.asp
-> https://www.php.net/manual/en/ref.strings.php
*/

//01: The PHP strlen() function returns the length of a string.
echo strlen("String length"),"\n";      //output = 11

//02: Converts a string to uppercase letters
echo strtoupper("string upper"),"\n";   //output = STRING UPPER

//03: Converts a string to lowercase letters
echo strtolower("STRING LOWER"),"\n";   //output = string lower

//04: strrev() function reverses a string.
echo strrev("String reverse"),"\n";     //output = esrever gnirtS

//05: str_word_count() function counts the number of words in a string.
echo str_word_count("String word count"),"\n";  //output = 3

/*06:
strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
-> strpos(subject,)
*/
echo strpos("Tufik Hasan","Hasan"),"\n";    //output = 6
echo strpos("ABC","C"),"\n";    //output = 2

/*07:
str_replace() function replaces some characters with some other characters in a string.
-> str_replace(search,replace,subject)
*/
echo str_replace("Rakib","Tufik","Rakib Hasan"),"\n";    //output = Tufik Hasan
echo str_replace("B","R","ABCDB Bb"),"\n";    //output = ARCDEFGHRIJKLR

$challenge = '-aaa----b-c-----d--e---f';
echo str_replace('--', '-', $challenge)."\n";   //output = -aaa--b-c---d-e--f
echo preg_replace('/--+/', '-', $challenge)."\n";   //output = -aaa-b-c-d-e-f

/*08:
trim() function in PHP is used to remove whitespace or other specified characters from the beginning and end of a string.
*/
$hello = "    Hello World      ";
echo trim($hello),"\n";     // Output: "Hello, World"
//You can also specify which characters you want to remove by passing them as a second argument to the trim() function
$str = "Hello World!";
echo trim($str,"Hed!")."\n";  //output = llo Worl


//09: wordwrap() - Wrap a string into new lines when it reaches a specific length
echo wordwrap("Hello World",5)."\n"; 
/*output = 
Hello
World
*/

//10: join() - Join array elements with a string:
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr)."\n";   //output = Hello World! Beautiful Day!

//11: md5() - Calculate the MD5 hash of the string "Tufik"
echo md5("Tufik")."\n";     //output = 31006770c0afba01db5a7410cb306f7e

//12: md5() - Calculate the MD5 hash of the file "index.php"
echo md5_file("index.php")."\n";     //output = 38f5cafba953f4feb2bf6ee27e01abb6

//13: str_split() function splits a string into an array.
//syntax; str_split(string,length)
print_r(str_split("Tufik"));  //output = Array( [0] => T[1] => u[2] => f[3] => i[4] => k)
print_r(str_split("Tufik",3)); //output = Array([0] => Tuf[1] => ik)

//NOTE: print_r() is a PHP function used to print human-readable information about a variable. It can be useful for debugging and inspecting the contents of arrays and objects.