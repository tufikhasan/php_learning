<?php
date_default_timezone_set( 'Asia/Dhaka' );
/* date() - Commonly use all date formats

 * https://www.php.net/manual/en/dateinterval.format
 * https://www.w3schools.com/php/func_date_date_format.asp
 */

//--------- Hour -----------
//12-hour format - (1 to 12)
echo date( 'g' ) . "\n"; //9
//24-hour format - (00 to 23)
echo date( 'G' ) . "\n"; //9
//12-hour format - (01 to 12)
echo date( 'h' ) . "\n"; //09
//24-hour format - (00 to 23)
echo date( 'H' ) . "\n\n"; //09

//--------- Minutes -----------
//Leading zeros (00 to 59)
echo date( 'i' ) . "\n\n"; //08

//--------- Seconds -----------
//Leading zeros (00 to 59)
echo date( 's' ) . "\n\n"; //36

//--------- AM & PM -----------
//Lowercase
echo date( 'a' ) . "\n"; //am
echo date( 'A' ) . "\n\n"; //AM

//--------- Timezone identifier  -----------
echo date( 'e', ) . "\n"; //UTC

//--------- Week -----------
//Three letters
echo date( 'D' ) . "\n"; //sun
//Full textual
echo date( 'l' ) . "\n"; //Sunday
//Monday is represented by 1 and Sunday is represented by 7
echo date( 'N' ) . "\n"; //7
//A numeric representation of the day (0 for Sunday, 6 for Saturday)
echo date( 'w' ) . "\n"; //0
//The current week number of year
echo date( 'W' ) . "\n\n"; //10

//--------- Days -----------
//From 01 to 31 - leading 0
echo date( 'd' ) . "\n"; //12
//From 1 to 31 - without leading 0
echo date( 'j' ) . "\n\n"; //12

//----------- Month ----------
//Three letters
echo date( 'M' ) . "\n"; //Mar
//From 01 to 12 - leading 0
echo date( 'm' ) . "\n"; //03
//From 1 to 12 - without leading 0
echo date( 'n' ) . "\n"; //3
//Full textual
echo date( 'F' ) . "\n"; //March
//days in the given month
echo date( 't' ) . "\n\n"; //31

//--------- Year -----------
//Two digit
echo date( 'y' ) . "\n"; //23
//Four digit
echo date( 'Y' ) . "\n"; //2023

//---------- leap year return 1, otherwise 0 -------
echo date( 'L', strtotime( '2024-01-01' ) ) . "\n"; //1
//The day of the year (from 0 through 365)
echo date( 'z' ) . "\n"; //70
//ISO-8601 year number
echo date( 'o' ) . "\n\n"; //203

//--------- S ---------
//S - The English ordinal suffix for the day of the month (2 characters st, nd, rd or th. Works well with j)
echo date( "S" ) . "\n"; //th
echo "days " . date( 'jS' ) . "\n"; //12th
echo "days " . date( 'dS' ) . "\n\n"; //12th