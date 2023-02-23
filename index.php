<?php
/* Class, Objects, Methods, Properties & $this keyword
 * Note: In a class, variables are called properties and functions are called methods!

Define a Class:
A class is defined by using the "class" keyword, followed by the name of the class and a pair of curly braces ("{}"). All its properties and methods go inside the braces:

Define Objects:
Classes are nothing without objects! We can create multiple objects from a class. Each object has all the properties and methods defined in the class, but they will have different property values.
Objects of a class are created using the "new" keyword.

The "$this" Keyword:
The "$this" keyword refers to the current object, and is only available inside methods.

 *
 * https://www.php.net/manual/en/language.oop5.basic.php
 * https://www.javatpoint.com/php-oops-concepts
 * https://www.w3schools.com/php/php_oop_what_is.asp
 */

//Define a Class:
class Student {
    //property
    public $name;

    //method
    public function get_name() {
        return $this->name;
    }

    public function set_name( $name ) {
        return $this->name = $name;
    }
}

//Define Objects:
//01:
$tufik = new Student(); //Create an object of Student class

$tufik->name = "Tufik"; //you can set public property outside class
echo $tufik->name . PHP_EOL;

$tufik->name = "Tufik Hasan"; //you can update public property outside class
echo $tufik->name . PHP_EOL;

//02:
$rakib = new Student(); //Create an object of Student class

$rakib->set_name( 'Rakib' ); //set property using method
echo $rakib->get_name() . PHP_EOL;

$rakib->set_name( 'Rakib Update' ); //Update property using method
echo $rakib->get_name() . PHP_EOL;

//"$this" Keyword example:
class Cat {
    //property
    public $name;

    //method
    function set_name( $name ) {
        return $this->name = $name;
    }
    //method
    public function say() {
        echo "& say Meow";
    }
    //method
    public function myName() {
        echo "Cat name is {$this->name} ";
        $this->say();
    }
}

//Create Object Cat class
$tom = new Cat();
//set cat name
$tom->set_name( "Tom" );
//method call
$tom->myName();
