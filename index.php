<?php
/* OOP - Access Modifiers - Public, Private, Protected

Access modifiers in PHP are keywords that are used to define the accessibility of class properties and methods from outside the class. PHP has three access modifiers: public, protected, and private.

-> public: When a property or method is defined as public, it can be accessed from anywhere, both inside and outside of the class.

-> private: When a property or method is defined as private, it can be accessed only within the class itself. It cannot be accessed by any subclasses or from outside the class.

-> protected: When a property or method is defined as protected, it can be accessed only within the class itself and any subclasses that extend the class.
 *
 * https://www.w3schools.com/php/php_oop_access_modifiers.asp
 * https://www.javatpoint.com/php-oops-access-specifiers
 * https://www.php.net/manual/en/language.oop5.visibility.php
 */


echo "\n\n------------ Public Modifier Example ---------\n";
class Fruit
{
    public $publicName;
    public function publicMethod()
    {
        echo "{$this->publicName}";
    }
}

$apple = new Fruit();
$apple->publicName = "Apple"; //ok
$apple->publicMethod(); //ok
echo "\n";
echo $apple->publicName; //ok
echo "\n";




echo "\n\n------------ Private Modifier Example ---------\n";
class Person
{
    private $privateName;
    private function privateMethod()
    {
        echo "My name is {$this->privateName}, I am from private modifier\n";
    }
    public function publicMethod()
    {
        //private property can be accessed only within the class itself
        $this->privateName = "Tufik Hasan";
        //private method can be accessed only within the class itself
        $this->privateMethod();
    }
}

$tufik = new Person();
// $tufik->privateName = "Tufik"; //ERROR: Cannot access private property
// echo $tufik->privateName; //ERROR: Cannot access private property
// $tufik->privateMethod();   //ERROR: Call to private method
$tufik->publicMethod(); //ok




echo "\n\n------------ Protected Modifier Example ---------\n";
class Human
{
    protected $protectedName;
    protected function protectedMethod()
    {
        echo "My name is {$this->protectedName}, I am from protected modifier\n";
    }
    public function publicMethod()
    {
        //protected property can be accessed only within the class itself and any subclasses that extend the class
        $this->protectedName = "Tufik Hasan";
        //protected method can be can be accessed only within the class itself and any subclasses that extend the class
        $this->protectedMethod();
    }
}
echo "\n01:\n";
$rakib = new Human();
// $rakib->protectedName = "Tufik"; //ERROR: Cannot access protected property Human
// echo $rakib->protectedName; //ERROR: Cannot access protected property Human
// $rakib->protectedMethod(); //ERROR: Call to protected method
$rakib->publicMethod(); //ok
// echo "\n";

//subclass access protected [properties or methods]
echo "\n02: subClass:\n";
class NewHuman extends Human
{
    public function subMethod()
    {
        echo "I am subClass of Human\n";
        $this->protectedName = "Towfik - Name updated";
        $this->protectedMethod();
    }
}
$subPer = new NewHuman();
$subPer->subMethod();
