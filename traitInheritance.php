<?php

namespace Data\Traits;

trait SayGoodBye{
    public function goodBye(?string $name):void{
        if(is_null($name)){
            echo "Good Bye ".PHP_EOL;
        }else{
            echo "Good bye $name".PHP_EOL;
        }
    }
}

trait SayHello{
    public function hello(?string $name):void{
        if(is_null($name)){
            echo "Hello".PHP_EOL;
        }else{
            echo "Hello $name".PHP_EOL;
        }
    }
}

trait HasName{
    public string $name;
}

trait CanRun{
    public abstract function run(): void;
}

// trait inheritance
trait All{
    // include trait di dalam trait
    use SayGoodBye, SayHello, HasName, CanRun;
}

class Person{
    
    use All;

    public function run():void{
        echo "Person $this->name is running".PHP_EOL;
    }
}

// uji coba
$person = new Person();
$person->goodBye("mark");
$person->hello("carl");

$person->name="arifin";
var_dump($person);

$person->run();

// keterangan

// nb : sebelumnya kita tahu bahwa class bisa menggunakan trait lebih dari satu
// nb : lantas bagaimana dengan trait yang menggunakan trait lain ?
// nb : trait bisa menggunakan trait lain, mirip seperti interface yang bisa implement interface lain
// nb : untuk menggunakan trait dari trait, penggunaannya sama seperti dengan penggunaan trait di class