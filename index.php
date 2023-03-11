<?php
/* $_SESSION
This variable contains data that is preserved across multiple requests, typically used for user authentication and tracking.
 * 
 -> https://www.php.net/manual/en/reserved.variables.session.php
 -> https://www.w3schools.com/php/php_sessions.asp
*/
session_start();
$_SESSION['name'] = "Tufik Hasan";
echo $_SESSION['name'];

//echo $_SESSION['class']; // this can't not access because session_1.php file session name not match
echo nl2br("\n");

$_SESSION['counter'] = $_SESSION['counter'] ?? 0;
$_SESSION['counter']++;
echo $_SESSION['counter'];

// session_destroy();
