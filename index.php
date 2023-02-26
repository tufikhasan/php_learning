<?php
/* Comparing Objects
 *
 * https://www.php.net/manual/en/language.oop5.object-comparison.php
 *
 */

//01
class Fruits {
    public $fruit;
    public function __construct( $fruit ) {
        $this->fruit = $fruit;
    }
}
$mango = new Fruits( "Mango" );
$mango2 = new Fruits( "Mango" );
$orange = new Fruits( "Orange" );
$orange2 = $orange;
//01:
if ( $mango == $mango2 ) {
    echo "Similar Object\n";
} else {
    echo "Not Similar Object\n";
}
//02:
if ( $mango === $mango2 ) {
    echo "Similar Object\n";
} else {
    echo "Not Similar Object\n";
}

echo "\n";

//03:
if ( $mango == $orange ) {
    echo "Similar Object\n";
} else {
    echo "Not Similar Object\n";
}
//04:
if ( $mango === $orange ) {
    echo "Similar Object\n";
} else {
    echo "Not Similar Object\n";
}

echo "\n";

//05:
if ( $orange == $orange2 ) {
    echo "Similar Object\n";
} else {
    echo "Not Similar Object\n";
}
//06:
if ( $orange === $orange2 ) {
    echo "Similar Object\n";
} else {
    echo "Not Similar Object\n";
}
