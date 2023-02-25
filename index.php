<?php
/*  Object Cloning "__clone()" - Magic Methods

If any of the properties was a reference to another variable or object, then only the reference is copied. Objects are always passed by reference, so if the original object has another object in its properties, the copy will point to the same object. This behavior can be changed by creating a "__clone()" method in the class.

The "clone" keyword is used to create a copy of an object.
 *
 * https://www.php.net/manual/en/language.oop5.cloning.php
 * https://www.w3schools.com/php/keyword_clone.asp
 *
 */

// --------------- Shallow Copy / Copy by Reference ---------------
// //01:
// class Fruits {
//     public $data;
//     public function __construct( $data ) {
//         $this->data = $data;
//     }
//     public function setFruit( $data ) {
//         $this->data = $data;
//     }
// }
// $o1 = new Fruits( "Mango" );
// print_r( $o1 );

// $o2 = clone $o1;
// print_r( $o1 );
// print_r( $o2 );

// $o2->setFruit( "Apple" );
// print_r( $o2 );

// //02:
// class Color {
//     public $color;
//     public function __construct( $color ) {
//         $this->color = $color;
//     }
//     public function setColor( $color ) {
//         $this->color = $color;
//     }
// }
// class FavColor {
//     public $color;
//     public function __construct( $color ) {
//         $this->color = new Color( $color );
//     }
//     public function updateColor( $color ) {
//         $this->color->setColor( $color );
//     }
// }

// $obj1 = new FavColor( "red" );
// print_r( $obj1 );

// $obj2 = clone $obj1;
// print_r( $obj2 );

// $obj2->updateColor( "Green" );
// print_r( $obj1 );
// print_r( $obj2 );

// //----------------     Deep Copy / Copy by value [using __clone() magic method] --------------
class Color {
    public $color;
    public function __construct( $color ) {
        $this->color = $color;
    }
    public function setColor( $color ) {
        $this->color = $color;
    }
}
class FavColor {
    public $color;
    public function __construct( $color ) {
        $this->color = new Color( $color );
    }
    public function updateColor( $color ) {
        $this->color->setColor( $color );
    }

    public function __clone() {
        $this->color = clone $this->color;
    }
}

$obj1 = new FavColor( "red" );
print_r( $obj1 );

$obj2 = clone $obj1;
print_r( $obj2 );

$obj2->updateColor( "Green" );
print_r( $obj1 );
print_r( $obj2 );