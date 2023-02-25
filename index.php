<?php
/* Static Methods - Static Properties
Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. These can also be accessed statically within an instantiated class object.

Static Methods & properties are declared with the static keyword:

To access a static method & property use the class name, double colon (::), and the method/property name:

A static method & property can be accessed from a method in the same class using the "self" keyword and double colon (::)

To call a static method & property from a child class, use the "parent" keyword inside the child class:
 *
 * https://www.w3schools.com/php/php_oop_static_methods.asp
 * https://www.w3schools.com/php/php_oop_static_properties.asp
 * https://www.geeksforgeeks.org/static-function-in-php/
 * https://www.php.net/manual/en/language.oop5.static.php
 *
 */

//------------------ Static Methods ------------------------
// //01:
class ClassName {
    public static function staticMethod() {
        echo "Hello World!\n";
    }
}
ClassName::staticMethod();

//02:
// class People {
//     public function __construct() {
//         $this->staticMethod(); //you call static method inside a class like this
//         self::staticMethod(); //you call static method inside a class use "self::" keyword
//     }
//     public static function staticMethod() {
//         echo "I am from static method\n";
//     }
// }
// new People();

// //03:
// class greeting {
//     public static function welcome() {
//         echo "Some other class\n";
//     }
// }

// class SomeOtherClass {
//     public function message() {
//         greeting::welcome();
//     }
// }
// $obj = new SomeOtherClass();
// $obj->message();

// //04: Inheritance class
// class Human {
//     public static function walk() {
//         echo "I am walking\n";
//     }
// }
// class Person extends Human {
//     public function __construct() {
//         $this->walk();
//         self::walk();
//         parent::walk();
//         Human::walk();
//     }
// }
// new Person();

//------------------ Static Properties ------------------------
//01:
class Animal {
    static $name = "Cat";
}
echo Animal::$name;

// //02:
// class Animal {
//     static $name = "Cat";
//     public function __construct() {
//         // echo $this->name; //Error: you can't access static property like this.
//         echo self::$name; //using "self" keyword to access static property
//     }
// }
// new Animal();
// echo "\n";
// echo Animal::$name;

// //03:
// class Animal {
//     static $name = "Cat";
// }
// class Cat {
//     public function __construct() {
//         echo Animal::$name;
//     }
// }
// new Cat();

// //04:
// class Animal {
//     static $name = "Cat\n";
// }
// class Cat extends Animal {
//     public function __construct() {
//         // echo $this->name; //Error: you can't access static property like this.
//         echo Animal::$name;
//         echo self::$name;
//         echo parent::$name;
//     }
// }
// $obj = new Cat();