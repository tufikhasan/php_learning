<?php
/* Traits - OOP PHP

In PHP, a trait is a mechanism for code reuse in object-oriented programming. A trait is similar to a class in that it defines a set of methods, but it is not intended to be instantiated on its own. Instead, traits are designed to be included in classes using the use statement.\

 *
 * https://www.w3schools.com/php/php_oop_traits.asp
 * https://www.php.net/manual/en/language.oop5.traits.php
 * https://www.youtube.com/watch?v=Jkmj7LgMNHY
 *
 */

// //------------ example 01: --------------
// trait t1 {
//     public function fun1() {
//         echo "i am from t1:fun1\n";
//     }
// }
// class c1 {
//     use t1;
// }
// class c2 {
//     public function funC2() {
//         echo "I am from c2:funC2\n";
//     }
// }
// class c3 {
//     use t1;
// }

// ( new c1 )->fun1();
// // ( new c2 )->fun1();  // return error because fun1() undefined c2
// ( new c3 )->fun1();

// //---------- example 02: multiple trait use in one line ---------
// trait t1 {
//     public function fun1() {
//         echo "i am from t1:fun1\n";
//     }
// }
// trait t2 {
//     public function fun2() {
//         echo "i am from t2:fun2\n";
//     }
// }
// class c1 {
//     use t1, t2;
// }

// ( new c1 )->fun1();
// ( new c1 )->fun2();

// //---------- example 03: trait method override in a class ---------
// trait t1 {
//     public function fun1() {
//         echo "i am from t1:fun1\n";
//     }
// }
// class c1 {
//     use t1;
//     public function fun1() {
//         echo "i am override function from c1:fun1\n";
//     }

// }
// ( new c1 )->fun1();

// //---------- example 04: if 2 trait have ame method with the same name return error ---------
// //If two traits in PHP have the same method with the same name and signature, it will result in a fatal error because PHP does not allow multiple trait methods with the same name.
// trait t1 {
//     public function fun1() {
//         echo "i am from t1:fun1\n";
//     }
// }
// trait t2 {
//     public function fun1() {
//         echo "i am from t2:fun1\n";
//     }
// }
// class c1 {
//     use t1, t2;
// }
// ( new c1 )->fun1();

//---------- example 04: if 2 trait have ame method with the same name return error ---------
//To resolve this error, you can use the insteadof keyword to specify which trait method should be used when there are naming conflicts.
trait t1 {
    public function fun1() {
        echo "i am from t1:fun1\n";
    }
}
trait t2 {
    public function fun1() {
        echo "i am from t2:fun1\n";
    }
}
class c1 {
    use t1, t2 {
        t1::fun1 insteadof t2; // insteadof keyword to specify which trait method should be used
        t2::fun1 as fun2; //alias of fun1 as fun2
    }
}

( new c1 )->fun1();
( new c1 )->fun2();