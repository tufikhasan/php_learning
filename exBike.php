<?php
//01:
include "./bike.php";
$obj = new Vehicle\Motorcycle\Bike(); //Unqualified - try to ignore this
$obj->getName();
$obj2 = new \Vehicle\Motorcycle\Bike(); //Qualified - always try to use qualified name
$obj2->getName();

// //02:
// namespace Vehicle;
// include "./bike.php";
// $obj = new Motorcycle\Bike(); //Unqualified - try to ignore this
// $obj->getName();
// $obj2 = new \Vehicle\Motorcycle\Bike(); //Qualified - always try to use qualified name
// $obj2->getName();

// //03:
// namespace Vehicle\Motorcycle;
// include "./bike.php";
// $obj = new Bike();
// $obj->getName();

// //04:
// use Vehicle\Motorcycle\Bike;
// include "./bike.php";
// $obj = new Bike();
// $obj->getName();

// //05:
// use Vehicle\Motorcycle as B;
// include "./bike.php";
// $obj = new B\Bike();
// $obj->getName();

// //06:
// use Vehicle\Motorcycle\Bike as B;
// include "./bike.php";
// $obj = new B();
// $obj->getName();
