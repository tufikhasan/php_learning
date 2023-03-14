<?php
/* strtotime() - Parse about any English textual datetime
"strtotime()" is a built-in PHP function that converts a human-readable date/time string into a Unix timestamp (i.e., the number of seconds since January 1, 1970, 00:00:00 UTC).

The "strtotime()" function accepts a string representing the date/time in various formats (such as "now", "tomorrow", "next Monday", "February 15th, 2022", "2022-02-15", etc.), and returns the corresponding Unix timestamp.

Here are some examples of the possible formats that you can use as the parameter of:

'2022-03-14'
'2022/03/14'
'14 Mar 2022'
'March 14, 2022'
'2022-03-14 14:30:00 America/New_York'
'2022-03-14T14:30:00+02:00'
'2022-03-14 to 2022-03-20'

'14:30:00'
'2:30pm'
'14h30m00s'
'14:30'
'2pm to 4pm'

'now'
'today'
'yesterday'
'last Month'
'tomorrow'
'next Monday'
'noon'
'midnight'
'last Monday to next Friday'

'+1 day'
'-1 week'
'+1 month'
'+1 year'
'+2 weeks'
'+2 hours'
'-30 minutes'
'first day of +1 month'
'last day of -1 month'
'first day of next month'

 * https://www.php.net/manual/en/function.strtotime.php
 * https://www.w3schools.com/php/func_date_strtotime.asp
 *
 */
date_default_timezone_set('Asia/Dhaka');

echo strtotime("now") . "\n";

echo strtotime("last Month") . "\n";

echo strtotime("next month") . "\n";

echo (strtotime("+1 week -2 days +72 hours") - strtotime("now")) / (86400), "\n";

echo date('jS-F-Y h:i:s a', strtotime('+3 days 2hours 5 minutes 23 seconds')) . "\n";

echo date('dS/M/Y h:i:s a', strtotime("midnight")) . "\n";

echo date('h:i:s a', strtotime("noon")) . "\n";

echo date('h:i:s a', strtotime("today 8pm")) . "\n";

echo date('dS.M.Y h:i:s a', strtotime("first day of -1 month")) . "\n";

echo date('dS.M.Y', strtotime("first friday dec 2022")) . "\n";

echo date('dS.M.Y', strtotime(" +7 day")) . "\n";

echo date('D-dS.M.Y h:i:s a', strtotime("12/5/1997")) . "\n";

echo date('dS.M.Y', strtotime("next friday end month")) . "\n";

echo date('D dS.M.Y h:i:s a', strtotime("now America/New_York")) . "\n";
