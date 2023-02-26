<?php
/* Early and Late binding
 *
 * https://www.php.net/manual/en/language.oop5.late-static-bindings.php
 * https://www.geeksforgeeks.org/what-is-late-static-bindings-in-php/
 *
 */

//--------------- Early Bindings ---------
class X {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who();
    }
}

class Y extends X {
    public static function who() {
        echo __CLASS__;
    }
}

Y::test();

echo "\n";

//--------------- Late Static Bindings ---------
class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        static::who(); // Here comes Late Static Bindings
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test();