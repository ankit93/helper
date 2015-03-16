<?php

# http://php.net/manual/en/language.oop5.traits.php

// Trait
trait Sharable { 
  public function share()
  {
    echo 'Sharable Share';
  }
 
}

// Interface
interface Sociable {
 
  public function like();
  public function share();
 
}
 
 
// Class
class Post implements Sociable {
 
  use Sharable;
 
  public function like()
  {
      echo 'like';
  }
 
}


$obj = new Post;

$obj->share();

echo "<br/>";
echo "<br/>";
echo "<br/>";


##############################
##  Precedence Order Example
#############################

class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();

echo "<br>";echo "<br>";echo "<br>";

########################################
##  Alternate Precedence Order Example
########################################

trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!';
    }
}

class TheWorldIsNotEnough {
    use HelloWorld;
    public function sayHello() {
        echo 'Hello Universe!';
    }
}

$o = new TheWorldIsNotEnough();
$o->sayHello();

echo "<br>";
echo "<br>";
echo "<br>";



trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A,B{
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

class Aliased_Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
        A::smallTalk as small; 
    }
}

$obj= new Aliased_Talker;

$obj->smallTalk();
echo "<br>";
$obj->bigTalk();

$obj->small();