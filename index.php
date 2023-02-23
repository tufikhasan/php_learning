<?php
/* __destruct() Function
"__destruct()" is a magic method in PHP that is automatically called when an object is destroyed, either by the end of the script or by using the unset() function on the object. This method can be used to perform any necessary cleanup tasks, such as releasing resources, closing database connections, or saving data to a file.

The "__destruct()" method is useful when working with objects that hold resources that need to be released when the object is no longer needed, such as files, network connections, and database connections. By implementing the "__destruct()" method, you can ensure that these resources are properly cleaned up, even if the script is terminated unexpectedly.

 *
 * https://www.w3schools.com/php/php_oop_destructor.asp
 * https://www.javatpoint.com/php-oops-destructor
 * https://www.php.net/manual/en/language.oop5.decon.php
 */

//01:
class MyClass {
    public function __destruct() {
        // perform cleanup tasks here
    }
}

//02:
// class Fruit {
//     public $name;
//     public $color;
//     function __construct( $name ) {
//         $this->name = $name;
//     }
//     function __destruct() {
//         echo "The fruit is {$this->name}.";
//     }
// }

// $apple = new Fruit( "Apple" );

//03:
class Demo {
    public function demo() {
        echo "constructor1...\n";
    }
    public function __destruct() {
        echo "destroy1.....\n";
    }
}
class Demo1 extends Demo {
    public function __construct() {
        echo parent::demo();
        echo "constructor2...\n";
    }
    public function __destruct() {
        echo "destroy2.....\n";
    }
}
$obj = new Demo1();