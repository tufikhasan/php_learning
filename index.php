<?php
/*  Conversion from object to string  - "__toString()" Magic Methods

The __toString() method allows a class to decide how it will react when it is treated like a string.

 *
 * https://www.php.net/manual/en/language.oop5.magic.php#object.tostring
 *
 */

//Error - Object of class Fruits could not be converted to string
// class Fruits {
//     public $fruit;
//     public function __construct( $fruit ) {
//         $this->fruit = $fruit;
//     }
// }
// $mango = new Fruits( "Mango" );
// echo $mango;

//Object to String conversion
class Fruits {
    public $fruit;
    public function __construct( $fruit ) {
        $this->fruit = $fruit;
    }
    public function __toString() {
        return "This is an {$this->fruit}";
    }
}
$mango = new Fruits( "Mango" );
echo $mango;
