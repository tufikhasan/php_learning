<?php
/* $_SERVER - This variable contains information about the server environment and execution of the current script, such as the current page name, the IP address of the client, and the request method used to access the page.

 * https://www.php.net/manual/en/reserved.variables.server.php
 * https://www.w3schools.com/php/php_superglobals_server.asp
 * https://www.geeksforgeeks.org/php-superglobals/
 */

echo "PHP_SELF = " . $_SERVER['PHP_SELF'] . "<br><br>";

echo "REQUEST_METHOD = " . $_SERVER['REQUEST_METHOD'] . "<br><br>";

echo "SERVER_NAME = " . $_SERVER['SERVER_NAME'] . "<br><br>";

echo "SERVER_PORT = " . $_SERVER['SERVER_PORT'] . "<br><br>";

echo "HTTP_HOST = " . $_SERVER['HTTP_HOST'] . "<br><br>";

echo "SCRIPT_NAME = " . $_SERVER['SCRIPT_NAME'] . "<br><br>";

echo "SCRIPT_FILENAME = " . $_SERVER['SCRIPT_FILENAME'] . "<br><br>";

echo "SERVER_SOFTWARE = " . $_SERVER['SERVER_SOFTWARE'] . "<br><br>";

echo "HTTP_USER_AGENT = " . $_SERVER['HTTP_USER_AGENT'] . "<br><br>";

echo "SERVER_PROTOCOL = " . $_SERVER['SERVER_PROTOCOL'] . "<br><br>";

echo "REQUEST_TIME = " . $_SERVER['REQUEST_TIME'] . "<br><br>";

echo "HTTP_ACCEPT = " . $_SERVER['HTTP_ACCEPT'] . "<br><br>";

echo "REMOTE_ADDR = " . $_SERVER['REMOTE_ADDR'] . "<br><br>";

echo "REMOTE_PORT = " . $_SERVER['REMOTE_PORT'] . "<br><br>";
