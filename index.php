<?php
/*
This code sets the name of the PHP session to "MyApp" using the session_name() function. 

 * cookie_domain: This option sets the domain for the session cookie. In this case, the session cookie will be set for the domain ".local.com", which means it will be valid for all subdomains of "local.com".

 * cookie_path: This option sets the path for the session cookie. In this case, the session cookie will be valid for all paths on the domain, because the path is set to "/".

By default, the PHP session cookie is only valid for the current domain and path, so these options are useful if you want to share the session between multiple subdomains or pages on the same domain.

NOTE that in order for the "cookie_domain" option to work, you must also ensure that your web server is configured to serve all subdomains of the domain you specified. This can usually be done by adding a wildcard DNS record for the domain (e.g. *.local.com), and configuring the web server to handle requests for all subdomains.
 */
session_name("MyApp");
session_start([
    'cookie_domain' => '.local.com',
    'cookie_path' => '/',
]);
$_SESSION['name'] = "tufik Hasan";
echo $_SESSION['name'];
// session_destroy();
