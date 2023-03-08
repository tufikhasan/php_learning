<?php
/* $_COOKIE: This variable contains any cookies that have been set by the current script or previous scripts.

A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.

------ setcookie(name, value, expire, path, domain, secure, httponly); --------
NOTO: Only the name parameter is required. All other parameters are optional.

NOTE: The setcookie() function must appear BEFORE the <html> tag.

 * https://www.w3schools.com/php/php_cookies.asp
 * https://www.php.net/manual/en/reserved.variables.cookies.php
 * https://www.php.net/manual/en/function.setcookie.php
*/
$cookie_name = "user";
$cookie_value = "Tufik Hasan";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>

<body>

    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>

</body>

</html>