<?php
/* File data processing using serialize(),unserialize() */

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
$data = serialize($students);
file_put_contents('students.csv', $data, LOCK_EX);

// // //-------- csv file read by line -----------
// $data = file_get_contents('students.csv');
// $students = unserialize($data);
// print_r($students);

// //------------- add new student ------------
// $data = file_get_contents('students.csv');
// $students = unserialize($data);
// $student = [
//     "name"  => "Rocky",
//     "age"   => 19,
//     "roll"  => 45,
//     "class" => "Ten",
// ];
// array_push($students, $student);
// $data = serialize($students);
// file_put_contents('students.csv', $data, LOCK_EX);

// //------------- delete specific line from file ------------
// $data = file_get_contents('students.csv');
// $students = unserialize($data);
// unset($students[2]);
// $data = serialize($students);
// file_put_contents('students.csv', $data, LOCK_EX);
