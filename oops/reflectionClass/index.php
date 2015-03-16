<?php
# http://php.net/manual/en/book.reflection.php
# http://php.net/manual/en/class.reflectionclass.php
# http://php.net/manual/en/reflectionclass.construct.php

# http://www.tuxradar.com/practicalphp/16/4/0

class Author {
    private $firstName;
    private $lastName;
    
    public function getFirstName() {
        return $this->firstName;
    }
 
    public function getLastName() {
        return $this->lastName;
    }
}
 
class Question {
    private $author;
    private $question;
 
    public function __construct($question, Author $author) {
        $this->author = $author;
        $this->question = $question;
    }
 
    public function getAuthor() {
        return $this->author;
    }
 
    public function getQuestion() {
        return $this->question;
    }
}


    //$child = new mychild('hello world');
   // $child->foo('test');
echo "<pre/>";

   $reflect = new ReflectionClass('Question');


    foreach($reflect->getMethods() as $reflectmethod) {
        echo "{$reflectmethod->getName()}()";
        echo "<br/><br/>";
       # echo "  ", str_repeat("-", strlen($reflectmethod->getName()) + 2), "\n";

        foreach($reflectmethod->getParameters() as $num => $param) {
          echo "  Param $num: ", $param->getName(), "<br/>";
          #  echo "      Passed by reference: ", (int)$param->isPassedByReference(), "\n";
          #  echo "      Can be null: ", (int)$param->allowsNull(), "\n";

          #  echo "      Class type: ";
           if ($param->getClass()) {
               echo "   class :".$param->getClass()->getName();

           } else {
                # varible not class 
           }
          #  echo "\n\n";
        }
        echo "<br/>";echo "<br/>";
    }