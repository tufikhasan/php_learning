<?php
/**************  Associative Array to String Conversion - Serialize, json *************
Two popular ways of serializing associative arrays into strings are through the use of the 'serialize()' function or the 'JSON' (JavaScript Object Notation) format.
 */
$arr = [
    "name" => "Tufik Hasan",
    "age"  => 25,
    "roll" => 3,
];
/*------------------- 01: serialize() -------------------
 * The 'serialize()' function is a built-in PHP function that can convert an associative array into a string. It works by converting the array into a serialized string, which can be stored or transmitted as a string.

 * As you can see, the output of the serialize() function is a string that represents the original associative array. Note that this format is specific to PHP and may not be compatible with other languages.

 * https://www.javatpoint.com/how-to-use-php-serialize-and-unserialize-function
 * https://www.geeksforgeeks.org/how-to-use-php-serialize-and-unserialize-function/

 */

//------ serialize - (Associative Array to String Conversion) ---------
$serialize = serialize( $arr );
echo $serialize; // serialize string
echo "\n\n";

//------ unserialize - (Serialize to Associative Array) ---------
$unserialize = unserialize( $serialize );
print_r( $unserialize ); // associative array
echo "\n";

/*--------------------- 02: json_encode() -------------------
 * JSON is a lightweight data interchange format that is widely used for transmitting data between a client and a server. It is a text-based format that is easy to read and write, and can be easily parsed by most programming languages.

 * To convert an associative array into a JSON string, we can use the built-in json_encode()

 * http://php.adamharvey.name/manual/en/function.json-encode.php
 * https://www.php.net/manual/en/function.json-decode.php
 * https://www.javatpoint.com/how-to-convert-array-into-string-in-php

 */

// 'json_encode()' - (Associative Array to JSON)
$jsonEncode = json_encode( $arr );
echo $jsonEncode; //JSON
echo "\n\n";

// 'json_decode()' - (JSON to stdClass Object)
$stdClassObject = json_decode( $jsonEncode );
print_r( $stdClassObject ); //stdClass Object
echo "\n";

// 'json_decode()' - (JSON to Associative Array)
$jsonDecode = json_decode( $jsonEncode, true );
print_r( $jsonDecode ); // associative array
