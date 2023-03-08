<?php
/* $_GET: This variable contains the values of the variables passed to the current script via the URL parameters.

* https://www.php.net/manual/en/reserved.variables.get.php
* https://www.w3schools.com/php/php_superglobals_get.asp
* https://www.geeksforgeeks.org/php-superglobals/
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>$_GET - Method</title><!-- Milligram Mini css framework setup -->
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
                if (isset($_GET['fname']) && $_GET['fname'] != "") {
                    echo "FirstName: {$_GET['fname']}<br>";
                }
                if (isset($_GET['lname']) && !empty($_GET['lname'])) {
                    echo "LastName: {$_GET['lname']}";
                }

                ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-50 column-offset-25">
                <!-- Form default method $_GET  & Default action same file-->
                <form action="" method="GET">
                    <input type="text" name="fname" placeholder="First name...">
                    <input type="text" name="lname" placeholder="Last name...">
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>

</html>