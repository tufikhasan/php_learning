<?php
/* time() - microtime($boolean)
In PHP, the time() function returns the current Unix timestamp, which represents the number of seconds that have elapsed since January 1, 1970, at 00:00:00 UTC.

//unix approach to unix timestamps

 * https://www.w3schools.com/php/func_date_time.asp
 * https://www.php.net/manual/en/function.time.php
 */

//01:
echo time() . PHP_EOL;
//02:
echo 'Now: ' . time() . PHP_EOL;
//03:
$timestamp = time();
echo date( "d/m/Y", $timestamp ) . PHP_EOL;

//04:
echo "Unix timestamps with micro seconds = " . microtime( true ) . PHP_EOL;
echo "Unix timestamps with micro seconds = " . microtime( false ) . PHP_EOL;
//05:
$mt = microtime( true );
printf( "%10.5f", $mt );
echo PHP_EOL;

//06:
$startTime = microtime( true );
factorial( 100 );
$endTime = microtime( true );

$executionTime = $endTime - $startTime;
printf( "%10.8f", $executionTime );

function factorial( $num ) {
    $result = 1;
    for ( $i = 1; $i <= $num; $i++ ) {
        $result *= $i;
    }
    return $result;
}
