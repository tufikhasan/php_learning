<?php
/* date_create(), date_add(), date_sub(), date_format()

-> date_create() - create a new DateTime object
-> date_add() - Alias of DateTime::add()
-> date_sub() - Alias of DateTime::sub()
-> date_format() - Alias of DateTime::format()
-> date_interval_create_from_date_string() — Alias of DateInterval::createFromDateString()

 * https://www.php.net/manual/en/ref.datetime.php
 * https://www.w3schools.com/php/php_ref_date.asp
 *
 */

// date_create()
$date = date_create( '2019-01-01' );
echo date_format( $date, 'Y-M-d' ) . PHP_EOL;

// date_add()
$date = date_create( '2019-01-01' );
date_add( $date, date_interval_create_from_date_string( '1 year 30 days' ) );
echo date_format( $date, 'Y-M-d' ) . PHP_EOL;

// date_sub()
$date = date_create( "2019-01-01" );
date_sub( $date, date_interval_create_from_date_string( "1 year 30 days" ) );
echo date_format( $date, "Y-M-d" );
