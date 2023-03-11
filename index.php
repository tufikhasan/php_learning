<?php
/* fputcsv() - fgetcsv() */

// NOTE: CSV Means - comma separated values

/* --- fputcsv($file, $fields, $separator, $enclosure) ---

The fputcsv() function in PHP is an inbuilt function which is used to format a line as CSV(comma separated values) file and writes it to an open file. The file which has to be read and the fields are sent as parameters to the fputcsv() function and it returns the length of the written string on success or FALSE on failure.

 * https://www.php.net/manual/en/function.fputcsv.php
 * https://www.w3schools.com/php/func_filesystem_fputcsv.asp
 * https://www.geeksforgeeks.org/php-fputcsv-function/
 * 
*/
//01:
$filename = "text.txt";
$fOpen = fopen($filename, 'w');
fputcsv($fOpen, ['Tufik', 'Hasan', 'Bogura']);
fputcsv($fOpen, ['Rakib', 'Khan', 'Dhaka']);
fclose($fOpen);

//02:
$list = array(
    array("Peter", "Griffin", "Norway"),
    array("Glenn", "Quagmire", "Germany")
);
$file = fopen("contacts.csv", "w");
foreach ($list as $line) {
    fputcsv($file, $line);
}
fclose($file);

/* --- fgetcsv($file, $fields, $separator, $enclosure) ---

The fgetcsv() function is a built-in PHP function that reads a single row from a CSV file and returns it as an array of values. It takes one parameter, which is the file handle for the CSV file you want to read from.

 * https://www.php.net/manual/en/function.fgetcsv.php
 * https://www.w3schools.com/php/func_filesystem_fgetcsv.asp
 * https://www.geeksforgeeks.org/how-to-parse-a-csv-file-in-php/
 * 
*/
//01:
$filename = "text.txt";
$fOpen = fopen($filename, 'r');
$getCsv = fgetcsv($fOpen);

print_r($getCsv);
fclose($fOpen);

//02:
$file = fopen("contacts.csv", "r");
while ($student = fgetcsv($file)) {
    echo sprintf("Student name is %s %s and lives in %s", $student[0], $student[1], $student[2]) . PHP_EOL;
}
