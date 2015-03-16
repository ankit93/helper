<?php

abstract class Fruit {

   abstract public function eat() ;
   
}
abstract class Fruit2  extends Fruit{

    abstract public function eat2() ;
   
}

class Apple extends Fruit2 {

    public function eat() {
         echo "apple eat";
    }
    public function eat2()
    {
         echo "apple eat2";
    }
}


$apple = new Apple2();
$apple->eat2();