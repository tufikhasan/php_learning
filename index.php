<?php
/**************  Copy by Value & Copy by Reference **************/

/* ------------------ copy by value /deep copy --------------
-> When a variable is copied by value, a new copy of the variable is created with its own memory space. Changes made to the copy do not affect the original variable.
 */
echo "\n------- copy by value /deep copy --------\n";
//01:
$arr = [
    "name"    => "Tufik",
    "address" => "Bogura",
];

$newArr = $arr;
$newArr['name'] = "Tufik Updated";
print_r( $newArr );

//02:
// function updateAddress( $arr ) {
//     $arr["address"] .= ", Bangladesh";
//     print_r( $updateAdd );
// }
// updateAddress( $arr );

print_r( $arr );

echo "\n\n";

/* ------------------ Copy by Reference / shallow cop --------------
-> When a variable is copied by reference, a new variable is created that points to the same memory location as the original variable. Changes made to the new variable also affect the original variable.
 */
echo "\n----- Copy by Reference / shallow copy -----\n";
//01:
$fruit = [
    "name"   => "Apple",
    "weight" => "200g",
];

$newFruit = &$fruit;
$newFruit['name'] = "Orange";
print_r( $newFruit );

print_r( $fruit );

//02:
// $person = [
//     "name"    => "Rakib",
//     "address" => "Dhaka",
// ];
// function updatePerson( &$person ) {
//     $person["address"] .= ", Bangladesh";
//     print_r( $person );
// }
// updatePerson( $person );
// print_r( $person );