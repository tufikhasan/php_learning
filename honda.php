<?php

// //01: RETURN ERROR
// include "./bike.php";
// class Honda extends Bike {
//     public function getHondaName() {
//         echo "Honda\n";
//     }
// }

// $obj = new Honda();
// $obj->getName();

//02:
include "./bike.php";
class Honda extends \Vehicle\Motorcycle\Bike{
    public function getHondaName() {
        echo "Honda\n";
    }
}

$obj = new Honda();
$obj->getName();

// //03:
// namespace Vehicle\Motorcycle;
// include "./bike.php";
// class Honda extends Bike {
//     public function getHondaName() {
//         echo "Honda\n";
//     }
// }

// $obj = new Honda();
// $obj->getName();

// //04:
// use Vehicle\Motorcycle\Bike;
// include "./bike.php";
// class Honda extends Bike {
//     public function getHondaName() {
//         echo "Honda\n";
//     }
// }

// $obj = new Honda();
// $obj->getName();

// //05:
// use Vehicle\Motorcycle\Bike as B;
// include "./bike.php";
// class Honda extends B {
//     public function getHondaName() {
//         echo "Honda\n";
//     }
// }

// $obj = new Honda();
// $obj->getName();