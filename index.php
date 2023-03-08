<?php
/* $_REQUEST: This variable contains the values of $_GET, $_REQUEST, and $_COOKIE variables combined.

 * https://www.php.net/manual/en/reserved.variables.request.php
 * https://www.w3schools.com/php/php_superglobals_request.asp
 * https://www.geeksforgeeks.org/php-superglobals/
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>$_REQUEST - Method</title><!-- Milligram Mini css framework setup -->
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
                if (isset($_REQUEST['fname']) && $_REQUEST['fname'] != "") {
                    echo "FirstName: {$_REQUEST['fname']}<br>";
                }
                if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {
                    echo "LastName: {$_REQUEST['lname']}";
                }

                ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-50 column-offset-25">
                <!-- Form default method $_GET  & Default action same file-->
                <form method="POST">
                    <input type="text" name="fname" placeholder="First name...">
                    <input type="text" name="lname" placeholder="Last name...">
                    <input type="submit" value="POST">
                </form>
                <a class="button" href="?fname=Tufik&&lname=Hasan">$_GET Method</a>
            </div>
        </div>
    </div>
</body>

</html>