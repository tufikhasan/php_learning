<?php
session_start([
    'cookie_lifetime' => 300, //300/60 = 5 minutes
]);
$error = false;
if (isset($_POST['username']) && isset($_POST['password'])) {
    /* password hassing
    -> md5('12345'); //827ccb0eea8a706c4c34a16891f84e7b
    -> sha1('12345');  //8cb2237d0679ca88db6464eac60da96345513964
    -> hash('sha1', '12345');  //8cb2237d0679ca88db6464eac60da96345513964
    -> hash('sha256', '12345');
    -> hash('sha512', '12345');
    */
    if ('admin' == $_POST['username'] && '8cb2237d0679ca88db6464eac60da96345513964' == sha1($_POST['password'])) {
        $_SESSION['login'] = true;
    } else {
        $_SESSION['login'] = false;
        $error = true;
    }
}
if (isset($_POST['logout'])) {
    $_SESSION['login'] = false;
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Session login system</title><!-- Milligram Mini css framework setup -->
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic" />

    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css" />
</head>

<body>
    <div class="container" style="margin-top: 3rem;">
        <div class="row">
            <div class="column column-50 column-offset-25">
                <?php
                if (true == $_SESSION['login']) {
                    echo "Hello ! Admin Welcome";
                } else {
                    echo "Hello ! Stranger. Login Below";
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-50 column-offset-25">

                <?php
                if ($error) {
                    echo "<blockquote>Invalid username and password</blockquote>";
                }
                if (false == $_SESSION['login']) : ?>
                    <form method="POST">
                        <label for="name">Username</label>
                        <input type="text" name="username" id="name">
                        <label for="pass">Password</label>
                        <input type="password" name="password" id="pass">
                        <input type="submit" value="Login">
                    </form>
                <?php else : ?>
                    <form method="POST">
                        <input type="hidden" name="logout" value="1">
                        <input type="submit" value="Logout">
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>