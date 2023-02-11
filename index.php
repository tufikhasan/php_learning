<?php
/* ********************* Type hinting or type checking of function parameters ************
 *
Type hinting in PHP refers to specifying the type of a parameter that a function or method is expected to receive. This allows for improved error checking and code readability.

Default parameters in PHP refer to the values that are assigned to function or method parameters in case no value is passed for those parameters when the function is called. This helps to provide a fallback value for the parameter in case it is not specified, and can also simplify the function call.
 *
 * https://stackoverflow.com/questions/8522984/type-hinting-default-parameters
 * https://www.php.net/manual/en/language.types.declarations.php
 * https://www.geeksforgeeks.org/explain-type-hinting-in-php/
 */

//01: simple factorial function
function factorial( $num ) {
    $result = 1;
    for ( $i = $num; $i > 0; $i-- ) {
        $result *= $i;
    }
    return $result;
}

// function factorial( $num ) {
//     $result = 1;
//     for ( $i = 1; $i <= $num; $i++ ) {
//         echo $i . "\n";
//         $result *= $i;
//     }
//     return $result;
// }

$x = 5;
echo "Factorial of {$x} is = " . factorial( $x ) . "\n";

//02: Manually check parameter type validation
function factorial2( $num ) {
    if ( gettype( $num ) != "integer" ) {
        return "Invalid";
    }
    $result = 1;
    for ( $i = $num; $i > 0; $i-- ) {
        $result *= $i;
    }
    return $result;
}
$x = "5";
echo "Factorial of {$x} is = " . factorial2( $x ) . "\n";

//03: Check parameter type validation using php build in features. This is coming from PHP version 7
function factorial3( int $num ) {
    $result = 1;
    for ( $i = $num; $i > 0; $i-- ) {
        $result *= $i;
    }
    return $result;
}
$x = "5";
echo "Factorial of {$x} is = " . factorial3( $x ) . "\n";
//return fatal error
$x = "name";
echo "Factorial of {$x} is = " . factorial3( $x ) . "\n";
