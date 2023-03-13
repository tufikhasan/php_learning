<?php
/* mktime(hour, minute, second, month, day, year)

 * https://www.php.net/manual/en/function.mktime.php
 * https://www.w3schools.com/php/func_date_mktime.asp
 */

//01 Thu-23-03-23 2:10:30 am UTC
$timeStamp = mktime( 2, 10, 30, 3, 23, 2023 );
echo date( 'D-d-M-Y h:i:s A e', $timeStamp ) . "\n";

//02 Prints: October 3, 1975 was on a Friday
echo "October 3, 1975 was on a " . date( "l", mktime( 0, 0, 0, 10, 3, 1975 ) );