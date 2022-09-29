<?php

trait SayGoodBye {
    // ini mengoverride goodBye function yang ada di ParentPerson
    public function goodBye():void{
        echo "goodbye in trait".PHP_EOL;
    }
}

// parent class
class ParentPerson{
    public function goodBye():void{
        echo "goodbye in parent person".PHP_EOL;
    }
}

// child class
class Person extends ParentPerson{
    use SayGoodbye;

    // ini mengoverride goodBye function yang ada di trait
    public function goodBye():void{
        echo "goodbye in person".PHP_EOL;
    }
}

$person = new Person();
$person->goodBye();

// nb : jika sebuah class memiliki parent class yang memiliki function yang sama dengan function di trait, maka secara otomatis trait akan meng-override function tersebut
// nb : namun jika kita membuat function yang sama di child class, maka secara otomatis kita akan mengoverride function di trait.
// sehingga konsep sederhananya yaitu
// trait mengoverride function parent class
// child class mengoverride function trait
// note : konsep ini berlaku hanya untuk function yang sama pada parent class, trait dan child class.