<?php
/*  __set() & __get() - PHP Magic Methods
In PHP, "__get()" and "__set()" are magic methods that allow you to define custom behavior when getting or setting object properties that are inaccessible or do not exist.

"__get($property)" method is called when an undefined or inaccessible property is accessed using the object instance, or when a property is accessed with protected or private visibility. It accepts a single parameter, "$property", which is the name of the property being accessed, and should return the value of the property.

"__set($property", $value) method is called when an undefined or inaccessible property is set using the object instance, or when a property is set with protected or private visibility. It accepts two parameters, "$property", which is the name of the property being set, and "$value", which is the value to be assigned to the property.

 *
 * https://www.php.net/manual/en/language.oop5.overloading.php#object.set
 * https://www.php.net/manual/en/language.oop5.magic.php
 * https://www.geeksforgeeks.org/what-are-magic-methods-and-how-to-use-them-in-php/
 *
 */

// //Manually getter setter
// class Student {
//     private $name;
//     private $age;
//     public function __construct( $name, $age ) {
//         $this->name = $name;
//         $this->age = $age;
//     }
//     public function getName() {
//         return $this->name;
//     }
//     public function setName( $name ) {
//         $this->name = $name;
//     }
//     public function getAge() {
//         return $this->age;
//     }
//     public function setAge( $age ) {
//         $this->name = $age;
//     }
// }

// $rakib = new Student( "Rakib", 25 );
// echo $rakib->getName() . PHP_EOL;
// $rakib->setName( "Rakib Update" );
// echo $rakib->getName();

//********** Magic method __set() & __get() **********
class Student {
    private $name;
    private $age;
    public function __construct( $name = "", $age = "" ) {
        $this->name = $name;
        $this->age = $age;
    }
    public function __get( $property ) {
        return $this->$property;
    }
    public function __set( $property, $value ) {
        $this->$property = $value;
    }
}

$rakib = new Student( "Rakib", 25 );
echo $rakib->name . PHP_EOL;
$rakib->name = "Tufik";
echo $rakib->name;
