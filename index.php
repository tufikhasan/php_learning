<?php
/* DateTime() Class - Date difference

In PHP, the DateTime class is used to represent date and time values. This class allows you to create, manipulate, and format dates and times.

To create a DateTime object, you can use the new keyword and pass a string representing the date and time as the first argument to the constructor. The format of the string should match the desired output format.

 * https://www.php.net/manual/en/class.datetime.php
 *
 */

//Date difference using strtotime() function
$date1 = strtotime('1 jan 2023 12pm');
$date2 = strtotime('31 january 2023 12AM');
$defference = $date2 - $date1;
echo ($date2 - $date1) / (86400) . PHP_EOL;


//01: DateTime() - Date difference
$date1 = new DateTime('1 jan 2022 3pm');
$date2 = new DateTime('31 jan 2023 3pm');

$diff = $date1->diff($date2);
echo $diff->d . PHP_EOL;


//02: DateTime() - Date difference
$date1 = new DateTime('1 jan 2023 3pm');
$date2 = new DateTime('31 jan 2023 3pm');

$diff = $date1->diff($date2);
echo $diff->y > 0 ? $diff->y . PHP_EOL : "Zero\n";


//03: DateTime() - Date difference
$date1 = new DateTime('1 jan 2022');
$date2 = new DateTime('25 july 2023');

$diff = $date1->diff($date2);
echo $diff->d . " day " . $diff->m . " month " . $diff->y . " year " . PHP_EOL;


//04: DateTime() - Date difference
$date1 = new DateTime('1 jan 2022');
$date2 = new DateTime('25 july 2023');

$diff = $date1->diff($date2);
echo isPluralOrSingle($diff->d, "day") . isPluralOrSingle($diff->m, "month") . isPluralOrSingle($diff->y, "year") . PHP_EOL;


function isPluralOrSingle($number, $type)
{
    if ($number == 0) {
        return "";
    } elseif ($number > 1) {
        return "{$number} {$type}s ";
    } else {
        return "{$number} {$type} ";
    }
}


//----------
$date = new DateTime('2023-03-14 12:00:00');
$date->add(new DateInterval('P1D')); //1day plus
$formatted_date = $date->format('Y-m-d H:i:s');
echo $formatted_date;
