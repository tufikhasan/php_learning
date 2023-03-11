<?php
session_name("MyApp");
session_start([
    'cookie_lifetime' => 5,
]);
$_SESSION['class'] = "session";
echo $_SESSION['class'];
