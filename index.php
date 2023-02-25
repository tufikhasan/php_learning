<?php
/* Static Methods & Property overrides */

//------------------ Static Method overrides ------------------------
//01:
class A {
    static function say() {
        echo "Hi from A\n";
    }
}
class B extends A {
    //can't overrides static method like this
    // function say(){
    //     echo "Hi from A\n";
    // }

    static function say() {
        echo "Hi from B\n";
        parent::say();
    }
}
B::say();

//------------------ Static Properties overrides ------------------------
//01
class Superclass {
    public static $myStaticProperty = "Hello, World!\n";
}

class Subclass extends Superclass {
    public static $myStaticProperty = "Goodbye, World!\n";
}

echo Superclass::$myStaticProperty; // Outputs "Hello, World!"
echo Subclass::$myStaticProperty; // Outputs "Goodbye, World!"

//02:
class X {
    static $name = "x";
}
class Y extends X {
    static $name = "y";
    public function __construct() {
        echo self::$name;
        echo "\n";
        echo parent::$name;
        echo "\n";
        echo parent::$name = "Z";
    }
}
new Y();