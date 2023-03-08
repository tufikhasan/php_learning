<?php
/*
PHP superglobal variables are built-in variables in PHP that are available in all scopes of a script. They are prefixed with a special character ($), followed by an underscore, and then the variable name. Here are some of the most commonly used superglobals:

 * $GLOBALS — References all variables available in global scope

 * $_SERVER: This variable contains information about the server environment and execution of the current script, such as the current page name, the IP address of the client, and the request method used to access the page.

 * $_GET: This variable contains the values of the variables passed to the current script via the URL parameters.

 * $_POST: This variable contains the values of variables submitted to the current script via an HTTP POST request.

 * $_REQUEST: This variable contains the values of $_GET, $_POST, and $_COOKIE variables combined.

 * $_FILES: This variable contains information about uploaded files, such as the file name, type, and size.

 * $_COOKIE: This variable contains any cookies that have been set by the current script or previous scripts.

 * $_SESSION: This variable contains data that is preserved across multiple requests, typically used for user authentication and tracking.

 * $_ENV — Environment variables

 * $http_response_header — HTTP response headers

These superglobals are accessible from anywhere in your PHP code, and are very useful for a wide range of tasks, such as accessing user input, tracking sessions, and handling file uploads.
 * 
 * https://www.php.net/manual/en/language.variables.superglobals.php
 * https://www.w3schools.com/php/php_superglobals.asp
 * https://www.geeksforgeeks.org/php-superglobals/
 */