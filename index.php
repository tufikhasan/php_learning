<?php
/* File data processing using json_encode(),json_decode() */

//---------- associative array serialize into file ------
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
$data = json_encode($students);
file_put_contents('students.csv', $data, LOCK_EX);

// //-------- csv file read by line - (json to object) -----------
// $data = file_get_contents('students.csv');
// $students = json_decode($data);
// print_r($students);
// echo $students[0]->name;

// //-------- csv file read by line - json to array -----------
// $data = file_get_contents('students.csv');
// $students = json_decode($data, true);
// print_r($students);
// echo $students[0]['name'];

// //------------- add new student ------------
// $data = file_get_contents('students.csv');
// $students = json_decode($data, true);
// $student = [
//     "name"  => "Rocky",
//     "age"   => 19,
//     "roll"  => 45,
//     "class" => "Ten",
// ];
// array_push($students, $student);
// $data = json_encode($students);
// file_put_contents('students.csv', $data, LOCK_EX);

// //------------- delete specific line from file ------------
// $data = file_get_contents('students.csv');
// $students = json_decode($data, true);
// unset($students[1]);
// print_r($students);
// $data = json_encode($students);
// file_put_contents('students.csv', $data, LOCK_EX);
