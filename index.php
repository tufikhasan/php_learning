<?php
/* File data processing using fputcsv(),fgetcsv() */

//---------- associative array item write into file ------
$students = [
    [
        "name" => "Tufik",
        "age" => 25,
        "roll" => 01,
        "class" => "BBA",
    ],
    [
        "name" => "Rakib",
        "age" => 42,
        "roll" => 17,
        "class" => "CSE",
    ],
    [
        "name" => "Sabbir",
        "age" => 32,
        "roll" => 4,
        "class" => "MSC",
    ],
];
$fOpen = fopen('students.csv', 'w');
foreach ($students as $student) {
    fputcsv($fOpen, $student);
}
fclose($fOpen);

// //-------- csv file read by line -----------
// $fOpen = fopen('students.csv', 'r');
// while ($student = fgetcsv($fOpen)) {
//     printf("Name = %s\nAge = %s\nRoll = %s\nClass = %s\n\n", $student[0], $student[1], $student[2], $student[3]);
// }
// fclose($fOpen);

// //------------- add new student ------------
// $student = [
//     "name"  => "Rocky",
//     "age"   => 19,
//     "roll"  => 45,
//     "class" => "Ten",
// ];
// $fOpen = fopen('students.csv', 'a');
// fputcsv($fOpen, $student);

// //------------- delete specific line from file ------------
// $students = file('students.csv');
// unset($students[2]);
// print_r($students);
// $fOpen = fopen('students.csv', 'w');
// foreach ($students as $student) {
//     if ($student != '') {
//         fwrite($fOpen, $student);
//     }
// }
// fclose($fOpen);
