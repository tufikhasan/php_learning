<?php
/* OOP - Interfaces
 *
 * What are Interfaces?
Interfaces allow you to specify what methods a class should implement.

Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".

Interfaces are declared with the "interface" keyword.

 *
 * Interfaces vs. Abstract Classes
Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

-> Interfaces cannot have properties, while abstract classes can
-> All interface methods must be public, while abstract class methods is public or protected
-> All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
-> Classes can implement an interface while inheriting from another class at the same time

To implement an interface, a class must use the "implements" keyword.
 *
 * https://www.w3schools.com/php/php_oop_interfaces.asp
 * https://www.php.net/manual/en/language.oop5.interfaces.php
 * https://www.geeksforgeeks.org/php-interface/
 *
 */

//01:
interface Animal {

    //All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
    public function makeSound();
}
//Classes can implements interface but not extends
class Cat implements Animal {
    public function makeSound() {
        echo "Meow\n";
    }
}
// $interface = new Animal(); //Error: Cannot instantiate interface Animal
$cat = new Cat();
$cat->makeSound();

// //02:
// interface BaseAnimal {
//     function eat();
//     function sleep();
// }

// //interface extends interface
// interface BaseHuman extends BaseAnimal {
//     function walk();
// }
// class Human implements BaseHuman {
//     function eat() {}
//     function sleep() {}
//     function walk() {}
// }

// //03:
// interface BaseAnimal {
//     function eat();
//     function sleep();
// }

// //class implements interface
// class Animal implements BaseAnimal {
//     function eat() {}
//     function sleep() {}
// }

// //interface extends interface
// interface BaseHuman extends BaseAnimal {
//     function walk();
// }
// class Human implements BaseHuman {
//     function eat() {}
//     function sleep() {}
//     function walk() {}
// }
// $animal = new Animal();
// echo $animal instanceof BaseAnimal; //1
// echo $animal instanceof BaseHuman; //not show because animal is not instance of base Human

// echo "\n";

// $human = new Human();
// echo $human instanceof BaseAnimal; //1
// echo "\n";
// echo $human instanceof BaseHuman; //1