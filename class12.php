<?php
//    class Animal{
//     public function MakeSound(){
//         echo "Animal makes a sound <br>";
//     }
//    }

//    class cat extends Animal{
//     public function MakeSound(){
//         echo "cat make a sound <br>";
//     }
// }
// class Dog extends Animal{
//     public function MakeSound(){
//         echo "Dog make a sound <br>";
//     }
// }

//   $cat = new Cat();
//   $cat->MakeSound();

//   $dog = new Dog();
//   $dog->MakeSound();

abstract class Vehicle{
    abstract public function start_Engine();
    abstract public function stop_Engine();
}

class Car extends Vehicle{
     public function start_Engine(){
        echo"Engine started <br>";
    }
     public function stop_Engine(){
        echo "Engine stopped <br>";
    }
}

$car = new Car();
$car->start_Engine();
$car->stop_Engine();

?>