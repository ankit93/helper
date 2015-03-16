<?php
# ReflectionClass
# http://php.net/manual/en/reflectionclass.construct.php

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

echo '<pre>';

$class = new ReflectionClass('Question');

print_r($class->newInstanceArgs( array(Author)));



