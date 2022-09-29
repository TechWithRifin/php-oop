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
    // trait property
    public string $name;
}

trait CanRun{
    // trait abstract function
    public abstract function run(): void;
}


class Person{
    // include 2 trait
    use SayGoodBye, SayHello, HasName, CanRun;

    public function run():void{
        echo "Person $this->name is running".PHP_EOL;
    }
}

// trait
// nb : Trait mirip dengan abstract class, kita bisa membuat konkrit function (function biasa) atau abstract function, properties dan dan constan
// nb : yang membedakan adalah kita bisa memasukkan banyak trait di dalam 1 class dan trait bisa digunakan ulang di class lain
// nb : trait mirip dengan extention, dimana kita bisa menambahkan konkrit function kedalam class dengan trait
// nb : secara sederhana trait digunakan untuk menyimpan function - function yang bisa digunakan ulang di beberapa class
// untuk menggunakan trait pada class, kita bisa menggunakan kata kunci use 
// nb : semua function,properties dan abstract function yang ada di dalam trait akan di include ke dalam class
// nb : jadi class dapat menggunakan semua function,properties dan abstract function yang ada di dalam trait
// nb : cara kerja trait mirip seperti extension

// trait properties
// nb : berbeda dengan interface, di trait kita bisa menambahkan properties
// nb : dengan menambahkan trait yang berisi properties, secara otomatis class tersebut akan memiliki properties yang ada di trait tersebut

// trait abstract function
// selain konkrit function, didalam trait juga bisa menambahkan abstract function
// jika terdapat abstract function di dalam trait, maka secara otomatis function tersebut harus di override di class yang menggunakan trait tersebut.