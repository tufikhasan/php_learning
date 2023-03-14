<?php
/* date_diff() - Date difference

 * https://www.geeksforgeeks.org/php-date_diff-function/
 * https://www.php.net/manual/en/datetime.diff.php
 * https://www.w3schools.com/php/func_date_date_diff.asp
 *
 */

$date1 = new DateTime( '1 jan 2023' );
$date2 = new DateTime( '31 january 2023' );

//01:
$diff = date_diff( $date1, $date2 );
echo $diff->format( "%d" ) . PHP_EOL;

//02:
$diff = date_diff( $date1, $date2 );
echo $diff->d . PHP_EOL;

//03:
$diff = date_diff( $date1, $date2 );

echo isPluralOrSingle( $diff->d, "day" ) . isPluralOrSingle( $diff->m, "month" ) . isPluralOrSingle( $diff->y, "year" ) . PHP_EOL;

function isPluralOrSingle( $number, $type ) {
    if ( $number == 0 ) {
        return "";
    } elseif ( $number > 1 ) {
        return "{$number} {$type}s ";
    } else {
        return "{$number} {$type} ";
    }
}

//04:
$date1 = date_create( '1 jan 2023' );
$date2 = date_create( '31 january 2023' );

$diff = date_diff( $date1, $date2 );
echo $diff->d . PHP_EOL;
