<?php
/* Abstract Classes and Abstract Methods
 *
"abstract" classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

An "abstract"" class is a class that contains at least one "abstract"" method. An "abstract"" method is a method that is declared, but not implemented in the code.

An "abstract"" class or method is defined with the "abstract"" keyword.

When inheriting from an "abstract" class, the child class method must be defined with the same name, and the same or a less restricted access modifier. So, if the "abstract" method is defined as protected, the child class method must be defined as either protected or public, but not private. Also, the type and number of required arguments must be the same. However, the child classes may have optional arguments in addition.

So, when a child class is inherited from an "abstract" class, we have the following rules:
-> The child class method must be defined with the same name and it redeclares the parent "abstract" method
-> The child class method must be defined with the same or a less restricted access modifier
-> The number of required arguments must be the same. However, the child class may have optional arguments in addition
 *
 * https://www.w3schools.com/php/php_oop_classes_abstract.asp
 * https://www.php.net/manual/en/language.oop5.abstract.php
 * https://www.geeksforgeeks.org/abstract-classes-in-php/
 * https://www.javatpoint.com/php-oops-abstract-class
 *
 */

// // ------------------------------------- 01: ------------------------------------
// //"abstract" class is a class that contains at least one "abstract" method.
// abstract class Peoples {
//     public function say() {
//         echo "Hi\n";
//     }
//     abstract function walk(); //you can't declare abstract method in parent class
// }

// class Person extends Peoples {
//     function walk() { //This function it's need. If you don't declare this function return a fatal error
//         echo "Walking\n";
//     }
// }

// //abstract class is a class that cannot be instantiated, meaning you cannot create an object of that class directly. Instead, it serves as a blueprint for other classes to extend from.
// // $obj = new Peoples();
// $obj = new Person();
// $obj->say();
// $obj->walk();

// // ----------------------------------- 02: -----------------------------------------
// abstract class Peoples {
//     abstract function walk($a); //if parent class abstract method has argument. child method need a argument
// }

// class Person extends Peoples {
//     function walk($x) { // ok
//         echo "Walking\n";
//     }
// }
// class Person2 extends Peoples {
//     function walk() {  //return error
//         echo "Walking\n";
//     }
// }

// //------------------------------ 03: ----------------------------------
// abstract class Peoples {
//     public function say() {
//         echo "Hi\n";
//     }
//     abstract protected function walk();
// }

// class Person extends Peoples {
//     //if the "abstract" method is defined as protected, the child class method must be defined as either protected or public, but not private.
//     public function walk() { //ok
//         echo "Person Walking\n";
//     }
// }

// class Person2 extends Peoples {
//     //if the "abstract" method is defined as protected, the child class method must be defined as either protected or public, but not private.
//     protected function walk() {  //ok
//         echo "Person Walking\n";
//     }
// }

// class Person3 extends Peoples {
//     //if the "abstract" method is defined as protected, the child class method must be defined as either protected or public, but not private.
//     private function walk() {  //it returns error
//         echo "Person Walking\n";
//     }
// }

// //------------------------------ 04: ----------------------------------s
// abstract class Shape {
//     protected $name;
//     protected $area;
//     public function __construct( $name ) {
//         $this->name = $name;
//         $this->calculateArea();
//     }
//     abstract public function calculateArea();

//     public function getArea() {
//         echo "This {$this->name}'s area is {$this->area}\n";
//     }
// }

// class Rectangle extends Shape {
//     private $a, $b;
//     public function __construct( $a, $b ) {
//         $this->a = $a;
//         $this->b = $b;
//         parent::__construct( "Rectangle" );
//     }
//     public function calculateArea() {
//         $this->area = $this->a * $this->b;
//     }

// }

// //Rectangle area get
// $rectangle = new Rectangle( 3, 4 );
// $rectangle->getArea();

// class Triangle extends Shape {
//     public function __construct() {
//         parent::__construct( "Triangle" );
//     }
//     public function calculateArea() {

//     }

// }

// //Triangle area get
// $triangle = new Triangle();
// $triangle->getArea();