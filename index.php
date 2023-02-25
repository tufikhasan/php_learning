<?php
/* Static Scope */

//01: public scope
class A {
    public static $name;
    static function say() {
        self::$name = "Hello\n";
    }
}
class B extends A {
    static function say() {
        echo parent::say();
        echo parent::$name;
        echo "Hi from B\n";
    }
}
echo A::$name;
echo B::say();
echo B::$name;

// //02: protected
// class A {
//     protected static $name;
//     static function say() {
//         self::$name = "Hello\n";
//     }
// }
// class B extends A {
//     static function say() {
//         echo parent::say();
//         echo parent::$name;
//         echo "Hi from B\n";
//     }
// }
// echo B::say();
// // echo A::$name; //error
// // echo B::$name; //error

// //03: private
// class A {
//     private static $name;
//     static function say() {
//         self::$name = "Hello\n";
//     }
// }
// class B extends A {
//     static function say() {
//         echo parent::say();
//         // echo parent::$name; //error
//         echo "Hi from B\n";
//     }
// }
// echo B::say();
// // echo B::$name; //error
// // echo A::$name; //error
