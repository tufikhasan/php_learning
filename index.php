<?php
/* File data processing - Manually */

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
    $data = sprintf("%s,%s,%s,%s\n", $student['name'], $student['age'], $student['roll'], $student['class']);
    fwrite($fOpen, $data);
}
fclose($fOpen);

// //-------- csv file read by line -----------
// $fOpen = fopen('students.csv', 'r');
// while ($line = fgets($fOpen)) {
//     $student = explode(',', $line);
//     printf("Name = %s\nAge = %s\nRoll = %s\nClass = %s\n\n", $student[0], $student[1], $student[2], $student[3]);
// }
// fclose($fOpen);

// //------------- delete line from file ------------
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
