<?php
/* Class file autoloading

In order to use a class defined in another PHP script, we can incorporate it with include or require statements. However, PHP’s autoloading feature does not need such explicit inclusion. Instead, when a class is used (for declaring its object etc.) PHP parser loads it automatically, if it is registered with spl_autoload_register() function. Any number of classes can thus be registered. This way PHP parser gets a last chance to load the class/interface before emitting an error.
 *
 * https://www.php.net/manual/en/language.oop5.autoload.php
 * https://www.geeksforgeeks.org/what-is-autoloading-classes-in-php/
 *
 */

function autoLoading( $name ) {
    // include $name . '.php';
    // include './autoload/' . strtolower( $name ) . '.php';
    include './autoload/' . $name . '.php';
}
spl_autoload_register( 'autoLoading' );

// ( new Bike )->launch();
$bike = new Bike();

// ( new Car )->launch();
$car = new Car();

// ( new Vehicle )->launch();
$vehicle = new Vehicle();