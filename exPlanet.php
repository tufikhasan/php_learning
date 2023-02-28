<?php
//01:
include "./planet.php";
$obj1 = new Astronomy\PLanet(); //Unqualified - try to ignore this
$obj1->say();
$obj2 = new \Astronomy\PLanet(); //Qualified - always try to use qualified name
$obj2->say();

// //02:
// namespace Astronomy;
// include "./planet.php";
// $obj = new PLanet();
// $obj->say();

// //03:
// namespace Astronomy;
// include "./planet.php";
// // $obj = new Astronomy\PLanet();  //Unqualified
// $obj = new \Astronomy\PLanet(); //Qualified
// $obj->say();

// //04:PHP build in function use in namespace file use backslash for Qualified function
// namespace Astronomy;
// // new DateTime;  //Unqualified - return error
// new \DateTime; //Qualified
// echo "Working DateTime() function";

// //06:
// use Astronomy\PLanet;
// include "./planet.php";
// $obj = new PLanet();
// $obj->say();

// //07: Namespace Alias
// use Astronomy as A;
// include "./planet.php";
// $obj = new A\PLanet();
// $obj->say();

// //08:
// use Astronomy\PLanet as P;
// include "./planet.php";
// $obj = new P();
// $obj->say();