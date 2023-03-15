<?php
/* PHP Exception - Custom Exceptions
A custom exception is an exception class that you define yourself in your code. It allows you to create specific error conditions that are unique to your application, and can be used to handle errors in a more granular way.

 * https://www.php.net/manual/en/language.exceptions.extending.php
 *
 */

//01:
Class MyException extends Exception {}
Class NetworkException extends Exception {}

function testException() {
    return throw new MyException();
}

try {
    testException();
} catch ( MyException $e ) {
    echo "MyException caught";
} catch ( NetworkException $e ) {
    echo "NetworkException caught";
}

// //02:
// Class MyException extends Exception {}
// Class NetworkException extends Exception {}

// function testException() {
//     return throw new NetworkException();
// }

// try {
//     testException();
// } catch ( MyException $e ) {
//     echo "MyException caught";
// } catch ( NetworkException $e ) {
//     echo "NetworkException caught";
// }

// //03: do not use exception in first catch
// Class MyException extends Exception {}
// Class NetworkException extends Exception {}

// function testException() {
//     return throw new NetworkException();
// }

// try {
//     testException();
// } catch ( Exception $e ) {
//     echo "Exception caught";
// } catch ( MyException $e ) {
//     echo "MyException caught";
// } catch ( NetworkException $e ) {
//     echo "NetworkException caught";
// }

// //04: Always try to use Exception in last catch
// Class MyException extends Exception {}
// Class NetworkException extends Exception {}

// function testException() {
//     return throw new MyException();
// }

// try {
//     testException();
// } catch ( MyException $e ) {
//     echo "MyException caught";
// } catch ( NetworkException $e ) {
//     echo "NetworkException caught";
// } catch ( Exception $e ) {
//     echo "Exception caught";
// }