<?php
/* date time - some common function

 * https://www.w3schools.com/php/php_ref_date.asp
 * https://www.php.net/manual/en/function.date.php
 * 

 * time() - Return the current Unix timestamp
 * 
 * microtime(bool) - Return the current Unix timestamp with microseconds
 * 
 * date(format,timestamp) - Return date and time
 * 
 * DateTime() - Object Representation of date and time.
 * 
 * date_default_timezone_set(timezone) - sets the default timezone
 * 
 * date_default_timezone_get() - returns the default timezone
 * 
 * date_diff(datetime1, datetime2) - returns the difference between two DateTime objects
 * 
 * mktime() - returns the Unix timestamp for a date
 * 
 * strtotime(time, now); - parses an English textual datetime into a Unix timestamp
 * 
 * date_add(object, interval) - adds some days, months, years, hours, minutes, and seconds to a date
 * 
 * date_create(time, timezone) - returns a new DateTime object
 * 
 * checkdate(month, day, year) - is used to validate a Gregorian date
 * 
 * date_sub(object, interval) - subtracts some days, months, years, hours, minutes, and seconds from a date
 * 
 * getdate(timestamp) - returns date/time information of a timestamp or the current local date/time
 * 
 * date_date_set(object, year, month, day) - sets a new date
 * 
 * date_interval_create_from_date_string(datetime) - sets up a DateInterval from the relative parts of the string
 * 
 * date_format(object, format) - Return a new DateTime object, and then format the date
 * 
 * date_timestamp_get() - Return the timezone of the given DateTime object