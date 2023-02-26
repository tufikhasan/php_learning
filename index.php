<?php
/* Method Overloading __call() & __callStatic() Magic Methods
In PHP, "__call()" and "__callStatic()" are magic methods that are used to handle method calls on an object or a class respectively when the method being called is not accessible or does not exist.

"__call()" is invoked when an inaccessible or undefined method is called on an object instance. It takes two parameters: the method name that was called, and an array of arguments that were passed to the method. It can be used to provide dynamic method invocation, as well as to implement "getters" and "setters" for object properties.

"__callStatic()" is invoked when an inaccessible or undefined static method is called on a class. It takes two parameters: the method name that was called, and an array of arguments that were passed to the method. It can be used to provide dynamic static method invocation.
 *
 * https://www.php.net/manual/en/language.oop5.magic.php
 *
 */

//**************  __call()  ***************/
class Bike {
    public function __call( $method, $args ) {
        if ( "run" == $method ) {
            if ( $args ) {
                foreach ( $args as $arg ) {
                    static $count;
                    $count++;
                    echo "running Argument($count) = {$arg},";
                }
                echo "\n";
            } else {
                echo "I am running\n";
            }
        }
    }
}
$suzuki = new Bike();
$suzuki->run();
$suzuki->run( "name", "price" );

//************** __unset() ***********/
class Vehicle {
    static function __callStatic( $method, $args ) {
        echo "\nStatic CAll";
    }
}
Vehicle::wash();
