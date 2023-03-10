<?php
/* file_put_contents(filename, data, mode, context) - writes data to a file.

This function follows these rules when accessing a file:

 -> If FILE_USE_INCLUDE_PATH is set, check the include path for a copy of filename
 -> Create the file if it does not exist
 -> Open the file
 -> Lock the file if LOCK_EX is set
 -> If FILE_APPEND is set, move to the end of the file. Otherwise, clear the file content
 -> Write the data into the file
 -> Close the file and release any locks

NOTE: Use FILE_APPEND to avoid deleting the existing content of the file.

 * 
 * https://www.w3schools.com/php/func_filesystem_file_put_contents.asp
 * https://www.geeksforgeeks.org/php-file_put_contents-function/
 * https://www.php.net/manual/en/function.file-put-contents

*/
// //01: clear the file content and write new
// $file = 'text.txt';
// file_put_contents($file, 'mango');
// file_put_contents($file, 'orange');
// echo file_get_contents($file);

// //02: move to the end of the file and write new
// $file = 'text.txt';
// file_put_contents($file, "mango\n", FILE_APPEND);
// file_put_contents($file, "orange\n", FILE_APPEND);
// echo file_get_contents($file);

//02: Acquire an exclusive lock on the file while proceeding to the writing.
$file = 'text.txt';
file_put_contents($file, "mango\n", FILE_APPEND | LOCK_EX);
file_put_contents($file, "orange\n", FILE_APPEND | LOCK_EX);
echo file_get_contents($file);
