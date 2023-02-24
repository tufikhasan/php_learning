<?php
/* final Keyword - PHP 
 *
Final keyword in PHP is used in different context. The "final" keyword is used only for methods and classes.

01-Class: When the "final" keyword is used before a class definition, it means that no other class can extend from that class. This is useful when you want to prevent others from modifying the behavior of your class.

02-Method: When the "final" keyword is used before a method definition, it means that no child class can override that method. This is useful when you want to ensure that a particular method in your class is not modified in the subclasses.

 * https://www.php.net/manual/en/language.oop5.final.php
 * https://www.geeksforgeeks.org/final-keyword-in-php/
 * https://www.w3schools.com/php/keyword_final.asp
 * https://www.javatpoint.com/php-oops-final-keyword
 *
 */
//-------- 01: final keyword is used before a class ------
// final class Bicycle {
//   // This class cannot be extended because it is marked as final.
// }

// class Bike extends Bicycle {
//   // This will result in a fatal error because Bicycle is marked as final and cannot be extended.
// }

//-------- 02: final keyword is used before a method ------
class Vehicle {
    final public function move() {
      echo "The vehicle is moving.";
    }
  }
  class Car extends Vehicle {
    // This will result in a fatal error because move() is marked as final in the parent class.
    public function move() {
      echo "The car is moving.";
    }
  }

// //-------- 03:
// abstract class Peoples {
//     final public function goto () {
//         echo "Goto market";
//     }
// }

// class Person extends Peoples{
//   //can't override final method
//   public function goto()
//   {
    
//   }
// }
