<?php
/* Sorting and autoloading the file structure of large projects by namespace */
namespace CloudStorage;
require_once "./autoloader.php";

use \CloudStorage\FileSystem\Files\Contracts\ImageContracts;
use \CloudStorage\FileSystem\Files\Images\Jpeg;
use \CloudStorage\FileSystem\Scanner;
use \CloudStorage\Mail\Mailer;

class Main {
    public function __construct() {
        $mail = new Mailer();
        $mail->getMail();

        $scan = new Scanner();
        $scan->scan();

        $dimension = new ImageContracts();
        $dimension->getDimension();

        $jpeg = new Jpeg();
        $jpeg->getName();
    }

}
new Main();
