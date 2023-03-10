<?php
/* A list of possible modes for fopen() function */

/*01: ("r") - READ MODE ONLY
Open a file for read only. File pointer starts at the beginning of the file
*/
//
// $fOpen = fopen('text.txt', 'r');
// echo fgets($fOpen);

//
// if (is_readable('text.txtfdf')) {
//     $fOpen = fopen('text.txt', 'r');
//     echo fgets($fOpen);
// } else {
//     echo "Not readAble";
// }


/*02: ("r+") - READ AND WRITE MODE
Open a file for read/write. File pointer starts at the beginning of the file
*/
// //01
// $filename = "text.txt";
// $fOpen = fopen($filename, 'r+');
// fwrite($fOpen, "orange");
// echo fgets($fOpen);

// //02
// $filename = "text.txt";
// $fOpen = fopen($filename, 'r+');

// echo fgets($fOpen);
// fwrite($fOpen, "apple");
// echo fgets($fOpen);
// fwrite($fOpen, "pineapple");


/*03: ("w") - WRITE MODE ONLY
Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
*/
// $fOpen = fopen('text.txt', 'w');
// fwrite($fOpen, 'new');

// $contentsExisting = file_get_contents('text.txt'); // existing contents
// $fOpen = fopen('text.txt', 'w');
// fwrite($fOpen, $contentsExisting);
// fwrite($fOpen, "grape\n");
// echo file_get_contents('text.txt');

// if (is_writable('text.txt')) {
//     $fOpen = fopen('text.txt', 'w');
//     fwrite($fOpen, 'new');
//     echo "File is writeable";
// }

// $fOpen = fopen('text.txt', 'w');
// fwrite($fOpen, 'new');
// echo fgets($fOpen); //can't read (w) mode



/*04: ("w+") - WRITE AND READ MODE
Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
*/
// $fOpen = fopen('text.txt', 'w+');
// fwrite($fOpen, 'new');
// rewind($fOpen);
// echo fgets($fOpen); //read (w+) mode


/* 05: ("a") - APPEND MODE ONLY
Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
*/
// $fOpen = fopen('text.txt', 'a');
// fwrite($fOpen, "mango\n");

// $fOpen = fopen('text.txt', 'a');
// fwrite($fOpen, "mango\n");
// echo fgets($fOpen); //can't read (a) mode



/* 06: ("a+") APPEND AND READ MODE
Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
*/
// $fOpen = fopen('text.txt', 'a+');
// fwrite($fOpen, "\nmango");
// rewind($fOpen);
// echo fgets($fOpen); //read (a+) mode


/*07: ("x") - CREATE NEW FILE AND WRITE
Creates a new file for write only. Returns FALSE and an error if file already exists
*/
// $file = fopen("example.txt", "x");

// if ($file === false) {
//     echo "Failed to create file.";
// } else {
//     fwrite($file, "Hello, world!");
//     fclose($file);
// }

/*
08: "x+" - CREATE NEW FILE WRITE AND READ MODE
Creates a new file for read/write. Returns FALSE and an error if file already exists
*/
// $file = fopen("example.txt", "x+");

// if ($file === false) {
//     echo "Failed to create file.";
// } else {
//     fwrite($file, "Hello, world!");
//     rewind($file);
//     $data = fread($file, filesize("example.txt"));
//     echo $data;
//     fclose($file);
// }
