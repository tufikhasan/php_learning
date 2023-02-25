<?php
/* IteratorAggregate interface - practical example
 *
 * https://www.php.net/manual/en/class.iteratoraggregate.php
 *
 */

// //01:
// class Districts {
//     private $districts;
//     public function __construct() {
//         $this->districts = [];
//     }
//     public function addDistrict( $district ) {
//         array_push( $this->districts, $district );
//     }
//     public function getTotalDistrict() {
//         return $this->districts;
//     }
// }
// $allDistricts = new Districts;
// $allDistricts->addDistrict( "Bogura" );
// $allDistricts->addDistrict( "Dhaka" );
// $allDistricts->addDistrict( "Rajshahi" );

// print_r( $allDistricts->getTotalDistrict() );
// echo count( $allDistricts->getTotalDistrict() ) . PHP_EOL;

// $_districts = $allDistricts->getTotalDistrict();
// foreach ( $_districts as $district ) {
//     echo $district . ", ";
// }

//02:
class Districts implements IteratorAggregate {
    private $districts;
    public function __construct() {
        $this->districts = [];
    }
    public function addDistrict( $district ) {
        array_push( $this->districts, $district );
    }
    function getIterator(): Traversable {
        return new ArrayIterator( $this->districts );
    }
}
$allDistricts = new Districts;
$allDistricts->addDistrict( "Bogura" );
$allDistricts->addDistrict( "Dhaka" );
$allDistricts->addDistrict( "Rajshahi" );

foreach ( $allDistricts as $district ) {
    echo $district . ", ";
}