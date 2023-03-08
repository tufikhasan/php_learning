<?php
/* $_FILES: This variable contains information about uploaded files, such as the file name, type, and size.

 * https://www.php.net/manual/en/reserved.variables.files.php
 * https://www.php.net/manual/en/function.move-uploaded-file.php
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>$_FILES - File upload & Delete</title><!-- Milligram Mini css framework setup -->
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
                if (isset($_FILES['file']) && $_FILES['file'] != "") {
                    $img_name = $_FILES['file']['name'];
                    $img_tmp_name = $_FILES['file']['tmp_name'];
                    //show image name
                    echo "Image Name: {$img_name}<br>";

                    //image upload
                    $path = "./" . basename($img_name);
                    move_uploaded_file($img_tmp_name, $path);
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-50 column-offset-25">
                <form method="POST" enctype="multipart/form-data">
                    <input type="file" name="file">
                    <input type="submit" value="Upload">
                </form>
                <?php
                if (isset($_GET['image'])) {
                    //delete image from folder
                    @unlink($_GET['image']);
                }
                if (isset($_FILES['file']) && $_FILES['file'] != "") :
                    $image_path = "./" . $_FILES['file']['name']; ?>
                    <a class="button" href="?image=<?php echo $image_path; ?>">Delete image</a>
                    <div class="row">
                        <img src="<?php echo $image_path; ?>" alt="">
                    </div>
                <?php endif;  ?>
            </div>
        </div>
    </div>
</body>

</html>