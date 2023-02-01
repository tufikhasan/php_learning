<?php
/*
PHP Data types:
Variables can store data of different types, and different data types can do different things.

01: Scalar:
    -> String
    -> Integer Int
    -> Float / Double (floating point numbers - also called double)
    -> Boolean
02: Compound:
    -> Array
    -> Object
03: Special:
    -> NULL
    -> Resource

*/

//String
$name = "Tufik";
var_dump($name);

//Integer Int
$integer = 2023;
var_dump($integer);

//Float / Double
$floatOrDouble = 10.5;
var_dump($floatOrDouble);

//Float / Double
$bool = true;
var_dump($bool);

//Array
$arr = array("mango","orange","apple");
var_dump($arr);

//Object
class Student{
    public $name;
    public $age;
    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function message(){
        return "My name is a $this->name & i am ".$this->age."\n";
    }
}
$student = new Student("Tufik",25);
echo $student->message();


//Null
$nullData = null;
var_dump($nullData);


/****** Resources ******
The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.

A common example of using the resource data type is a database call.

We will not talk about the resource type here, since it is an advanced topic.
*/