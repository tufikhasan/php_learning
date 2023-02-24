<?php
/* OOP - Inheritance - extends class
 *
In PHP, object-oriented programming (OOP) allows you to use inheritance to create new classes based on existing classes, allowing you to reuse code and build complex object hierarchies. Inheritance is the mechanism by which one class is able to inherit properties and methods from another class.

To create an inherited class, you use the "extends" keyword, followed by the name of the class you want to inherit from.
 *
 * https://www.w3schools.com/php/php_oop_inheritance.asp
 * https://www.php.net/manual/en/language.oop5.inheritance.php
 * https://www.javatpoint.com/php-oops-inheritance
 *
 */

// 01:
class ParenClass {
    public function sayHi() {
        echo "I am from ParentClass\n";
    }
}

class SubClass extends ParenClass {
    #code here
}
$obj = new SubClass();
$obj->sayHi();

// // 02:
// class ParenClass {
//     public function __construct() {
//         $this->sayHi();
//     }
//     public function sayHi() {
//         echo "I am from ParentClass\n";
//     }
// }

// class SubClass extends ParenClass {
//     public function sayHi() {
//         echo "I am from SubClass\n";
//     }
// }
// $obj = new SubClass();

// //03:
// class ParenClass {
//     protected $name;
//     public function __construct( $name ) {
//         $this->name = $name;
//         $this->sayHi();
//     }
//     public function sayHi() {
//         echo "I am {$this->name} from ParentClass\n";
//     }
// }

// class SubClass extends ParenClass {
//     public function sayHi() {
//         parent::sayHi(); //call parent method like this
//         echo "I am {$this->name} from SubClass\n";
//     }
// }
// $obj = new SubClass( "Tufik Hasan" );

// // 04:
// class ParenClass {
//     protected function sayHi() {
//         echo "I am from ParentClass\n";
//     }
//     private function greeting() {
//         echo "Greeting\n";
//     }
// }

// class SubClass extends ParenClass {
//     public function subFun() {
//         parent::sayHi(); //protected method accessed from sum class
//         $this->sayHi(); //protected method accessed from sum class
//         // $this->greeting(); //private method can't accessed from sum class
//     }
// }

// $obj = new SubClass();
// $obj->subFun();