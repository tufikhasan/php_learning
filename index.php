<?php
/* Generating Unix timestamps of any date, month, year, and GMT timestamp

 * https://www.w3schools.com/php/php_ref_date.asp
 * https://www.php.net/manual/en/function.date.php
 *

 */
//---------- 01 --------
//Default Unix timestamps from (1 January) to current time
echo time() . "\n";

//Generating Unix timestamps from (1 January) to (1 January 2000)
echo mktime( 0, 0, 0, 1, 2000 ) . "\n\n";

//---------- 02 --------
//Set timezone
date_default_timezone_set( 'Asia/Dhaka' );

//Generating Unix timestamps from (1 January) to (1 January 2000)
$timeStamp = mktime( 0, 0, 0, 1, 2000 );
echo $timeStamp . "\n";

//GMT Unix timestamps from (1 January) to (1 January 2000)
$gmtTimeStamp = gmmktime( 0, 0, 0, 1, 2000 );
echo $gmtTimeStamp . "\n\n";

echo "Difference GMT time to Bangladesh time = " . (  ( $gmtTimeStamp - $timeStamp ) / ( 60 * 60 ) ) . " hours\n\n";

//---------- 03 --------
$date1 = mktime( 0, 0, 0, 12, 31, 2022 );
$date2 = mktime( 0, 0, 0, 1, 31, 2023 );

echo "From Dec 31 2022 to jan 31 2023 Days = " . (  ( $date2 - $date1 ) / ( 60 * 60 * 24 ) );