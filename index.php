<?php
/* write better code with OOP by forcing */

// //-------- 01:
// class Shapes {
//     private $shapes;
//     public function __construct() {
//         $this->shapes = [];
//     }

//     public function addShape( $shape ) {
//         array_push( $this->shapes, $shape );
//     }
//     public function totalShapes() {
//         return count( $this->shapes );
//     }
// }
// class Triangle {

// }
// class Rectangle {

// }

// class Student {

// }

// $shapeCollection = new Shapes();
// $shapeCollection->addShape( new Triangle );
// $shapeCollection->addShape( new Rectangle );
// $shapeCollection->addShape( new Student );
// echo $shapeCollection->totalShapes();

//-------- 02:
class Shapes {
    private $shapes;
    public function __construct() {
        $this->shapes = [];
    }

    public function addShape( Shape $shape ) {
        array_push( $this->shapes, $shape );
    }
    public function totalShapes() {
        return count( $this->shapes );
    }
}
class Shape {

}
class Triangle extends Shape {

}
class Rectangle extends Shape {

}

class Student {

}

$shapeCollection = new Shapes();
$shapeCollection->addShape( new Triangle );
$shapeCollection->addShape( new Rectangle );
// $shapeCollection->addShape( new Student );  //return fatal error because this is not a shape
echo $shapeCollection->totalShapes();