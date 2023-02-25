<?php
/* Class Constants
In Object-Oriented Programming (OOP) in PHP, constants are defined using the "const" keyword inside a class. A constant is a value that cannot be changed during the execution of a program. It is similar to a variable, but once its value is set, it cannot be modified.

A class constant is declared inside a class with the "const" keyword.

Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters:

We can access a constant from (outside) the class by using the class name followed by the scope resolution operator (::) followed by the constant name:

we can access a constant from (inside) the class by using the "self" keyword followed by the scope resolution operator (::) followed by the constant name:

 *
 * https://www.w3schools.com/Php/php_oop_constants.asp
 * https://www.php.net/manual/en/language.oop5.constants.php
 *
 */

//------------------ Static Properties overrides ------------------------
//01:
class X {
    const CONSTANT = "Hello World!\n";
}
echo X::CONSTANT;

//02:
class A {
    const WEL = "Welcome\n";
    public function greeting() {
        echo self::WEL;
        echo $this::WEL;
    }
}
$obj = new A();
$obj->greeting();

//03:
class ParentClass {
    const PAR = "I am a constant\n";
}
class ChildClass extends ParentClass {
    public function __construct() {
        echo parent::PAR;
        echo self::PAR;
        echo $this::PAR;
    }
}
new ChildClass();