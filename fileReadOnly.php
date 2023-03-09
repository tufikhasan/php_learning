<?php
// $filename = "text.txt";
// echo readfile($filename, true);
// echo PHP_EOL;

//----------- 01 ----------
$filename = "text.txt";
$fOpen = fopen($filename, 'r'); //Open a file for reading.
$line = fgets($fOpen); //Reads a line from an open file pointer
echo $line;
fclose($fOpen);

// //----------- 02 ----------
// $filename = "/Users/Tufik/Desktop/tutorial/text.txt";
// $fOpen = fopen($filename, 'r');
// $line = fgets($fOpen);
// echo $line;

// //----------- 03 ----------
// $filename = "\\Users\\Tufik\\Desktop\\tutorial\\text.txt";
// $fOpen = fopen($filename, 'r');
// $line = fgets($fOpen);
// echo $line;

// //----------- 04 ----------
// $filename = "c:\\Users\\Tufik\\Desktop\\tutorial\\text.txt";
// $fOpen = fopen($filename, 'r');
// $line = fgets($fOpen);
// echo $line;

// //----------- 05 ---------- 
// $filename = __DIR__ . '/text.txt';
// $fOpen = fopen($filename, 'r');
// $line = fgets($fOpen);
// echo $line;

// //----------- 06 ---------- 
// $filename = "text.txt";
// $fOpen = fopen($filename, 'r');
// $line = fgets($fOpen);
// echo $line;
// $line = fgets($fOpen);
// echo $line;
// $line = fgets($fOpen);
// echo $line;

// //----------- 07 ---------- 
// $filename = "text.txt";
// $fOpen = fopen($filename, 'r');

// while ($line = fgets($fOpen)) {
//     echo $line;
// }

// //----------- 08 ---------- 
// $filename = "text.txt";
// $fOpen = fopen($filename, 'r');

// while ($line = fgets($fOpen)) {
//     echo $line;
// }
// //This loop not working because position of a file pointer end
// while ($line = fgets($fOpen)) {
//     echo $line;
// }

// //----------- 09 - Rewind the position of a file pointer ---------- 
// $filename = "text.txt";
// $fOpen = fopen($filename, 'r');

// while ($line = fgets($fOpen)) {
//     echo $line;
// }
// rewind($fOpen);
// while ($line = fgets($fOpen)) {
//     echo $line;
// }

// //----------- 10 - Seeks on a file pointer ---------- 
// $filename = "text.txt";
// $fOpen = fopen($filename, 'r');
// fseek($fOpen, 2);
// while ($line = fgets($fOpen)) {
//     echo $line;
// }
// echo "\n---\n";
// fseek($fOpen, -15, SEEK_END);
// while ($line = fgets($fOpen)) {
//     echo $line;
// }

// //----------- 11 - Reads a specified number of bytes from an open file pointer ---------- 
// $filename = "text.txt";
// $fOpen = fopen($filename, 'r');
// // $fRead = fread($fOpen, 10);
// $fRead = fread($fOpen, filesize($filename));

// echo $fRead;

// //----------- 12 - Reads the entire contents of a file into a string ---------- 
// $filename = "text.txt";
// $file = file_get_contents($filename);
// echo $file;

// //----------- 13 -  Reads a file into an array, with each line of the file as an array element ---------- 
// $filename = "text.txt";
// $file = file($filename);
// print_r($file);
