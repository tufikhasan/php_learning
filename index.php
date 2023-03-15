<?php
/* PHP Exception error handler - introduction

 * https://www.php.net/manual/en/language.exceptions.php
 * https://www.w3schools.com/php/php_exceptions.asp
 * https://www.javatpoint.com/exception-handling-in-php
 *
 */

//01:
function ageCounter( $age ) {
    if ( $age <= 15 ) {
        return throw new Exception( "You are not Adult" );

    } elseif ( $age > 40 ) {
        return throw new Exception( 'You are old' );
    }
}
try {
    ageCounter( 4 );
} catch ( Exception $e ) {
    echo $e->getMessage();
} finally {
    echo "\nFinally run all time\n";
}

// //02:
// function inverse( $x ) {
//     if ( !$x ) {
//         throw new Exception( 'Division durch Null.' );
//     }
//     return 2 * $x;
// }

// try {
//     echo inverse( 5 ) . "\n";
//     echo inverse( 0 ) . "\n";
// } catch ( Exception $e ) {
//     echo 'Exception: ', $e->getMessage(), "\n";
// }

// //03:
// function ageCounter( $age ) {
//     if ( $age <= 15 ) {
//         return throw new Exception( "You are not Adult", 401 );

//     } elseif ( $age > 40 ) {
//         return throw new Exception( 'You are old', 401 );
//     }
// }
// try {
//     ageCounter( 4 );
// } catch ( Exception $e ) {
//     echo $e->getMessage() . PHP_EOL;
//     echo $e->getCode() . PHP_EOL;
//     echo $e->getLine() . PHP_EOL;
// }

// //04:
// function ageCounter( $age ) {
//     if ( $age <= 15 ) {
//         return throw new Exception( "You are not Adult", 401 );

//     } elseif ( $age > 40 ) {
//         return throw new Exception( 'You are old', 401 );
//     }
// }
// try {
//     ageCounter( 4 );
// } catch ( Exception $e ) {
//     echo $e->getMessage() . PHP_EOL;
//     echo $e->getCode() . PHP_EOL;
//     echo $e->getLine() . PHP_EOL;
//     echo $e->getFile() . PHP_EOL;
//     print_r( $e->getTrace() );
//     print_r( $e );
// }
