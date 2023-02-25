<?php
/* Countable interface
 *
 * https://www.php.net/manual/en/class.countable.php
 * https://www.php.net/manual/en/class.iteratoraggregate.php
 *
 */

// //01:
class Districts implements Countable {
    private $districts;
    public function __construct() {
        $this->districts = [];
    }
    public function addDistrict( $district ) {
        array_push( $this->districts, $district );
    }
    function count(): int {
        return count( $this->districts );
    }
}
$allDistricts = new Districts;
$allDistricts->addDistrict( "Bogura" );
$allDistricts->addDistrict( "Dhaka" );
$allDistricts->addDistrict( "Rajshahi" );

echo count( $allDistricts );

// //02:
// class Districts implements IteratorAggregate, Countable {
//     private $districts;
//     public function __construct() {
//         $this->districts = [];
//     }
//     public function addDistrict( $district ) {
//         array_push( $this->districts, $district );
//     }
//     function getIterator(): Traversable {
//         return new ArrayIterator( $this->districts );
//     }
//     function count(): int {
//         return count( $this->districts );
//     }
// }
// $allDistricts = new Districts;
// $allDistricts->addDistrict( "Bogura" );
// $allDistricts->addDistrict( "Dhaka" );
// $allDistricts->addDistrict( "Rajshahi" );

// foreach ( $allDistricts as $district ) {
//     echo $district . ", ";
// }
// echo count( $allDistricts );