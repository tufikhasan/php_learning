<?php
/* property overloading & the __isset() & __unset() magic methods
 *
 * https://www.php.net/manual/en/language.oop5.magic.php
 *
 */

//**************  __isset()  ***************/
class Bike {
    private $parameter;
    public function __construct( $name, $model, $price ) {
        $this->parameter = [];
        $this->parameter["name"] = $name;
        $this->parameter["model"] = $model;
        $this->parameter["price"] = $price;
    }
    // public function __isset( $name ) {
    //     if ( !isset( $this->parameter[$name] ) ) {
    //         return false;
    //     }
    //     return true;
    // }
    public function __isset( $name ) {
        return isset( $this->parameter[$name] );
    }
}
$suzuki = new Bike( "FZ", "v-2", 200000 );
if ( isset( $suzuki->model ) ) {
    echo "Found";
} else {
    echo "Not Found";
}

//************** __unset() ***********/
class Vehicle {
    private $parameter;
    public function __construct( $name, $model, $price ) {
        $this->parameter = [];
        $this->parameter["name"] = $name;
        $this->parameter["model"] = $model;
        $this->parameter["price"] = $price;
    }
    public function __unset( $name ) {
        print_r( $this->parameter );
        unset( $this->parameter[$name] );
        print_r( $this->parameter );
    }
}
$car = new Vehicle( "BMW", "1200", 10000000 );
unset( $car->model );

//***********  __get() && __set **********/
//01:
// class Student {
//     private $name, $lastName, $age;
//     public function __construct( $name, $lastName, $age ) {
//         $this->name = $name;
//         $this->lastName = $lastName;
//         $this->age = $age;
//     }
//     public function __get( $name ) {
//         echo $this->$name;
//     }
// }
// $student = new Student( "Tufik", "Hasan", 25 );
// $student->name;

//02:
// class Student {
//     private $stdArr;
//     public function __construct( $name, $lastName, $age ) {
//         $this->stdArr = [];
//         $this->stdArr["name"] = $name;
//         $this->stdArr["lastName"] = $lastName;
//         $this->stdArr["age"] = $age;
//     }
//     public function __get( $name ) {
//         echo $this->stdArr[$name];
//     }
//     public function __set( $name, $value ) {
//         $this->stdArr[$name] = $value;
//     }
// }
// $student = new Student( "Tufik", "Hasan", 25 );
// $student->name;
// $student->name = "Rakib";
// echo "\n";
// $student->name;
