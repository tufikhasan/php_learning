<?php
/* __construct Function
"__construct()" is a special method in PHP that is used to define constructors for classes. A constructor is a special method that is automatically called when an object is created from a class. It is used to initialize the object's properties and perform any other setup tasks that are required.

 *
 * https://www.w3schools.com/php/php_oop_constructor.asp
 * https://www.php.net/manual/en/language.oop5.decon.php
 * https://www.javatpoint.com/php-oops-constructor
 */

//01:
//constructor is automatically called when an object is created
class Person {
    public function __construct() {
        echo "I am a construct\n";
    }
}
$tufik = new Person();
$rakib = new Person();

//02:
class Human {
    public function __construct( $name ) {
        echo "My name is $name\n";
    }
}

$rony = new Human( "Rony" );

//03:
class Fruits {
    public $name;
    public $color;
    public function __construct( $fruitsName, $fruitsColor ) {
        $this->name = $fruitsName;
        $this->color = $fruitsColor;
    }
    public function info() {
        echo "{$this->name} color is {$this->color}\n";
    }
}

$mango = new Fruits( "Mango", "green" );
$mango->info();

$apple = new Fruits( "Apple", "red" );
$apple->info();