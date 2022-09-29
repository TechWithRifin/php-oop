<?php

trait A {
    function doA(){
        echo "a".PHP_EOL;
    }
    function doB(){
        echo "b".PHP_EOL;
    }
}

trait B {
    function doA(){
        echo "A".PHP_EOL;
    }
    function doB(){
        echo "B".PHP_EOL;
    }
}

class Sample{
    use A, B {
        // memakai function doA yang berada di trait A dari pada function doA yang berada di trait B
        A::doA insteadof B;
        // memakai function doB yang berada di trait B dari pada function doB yang berada di trait A
        B::doB insteadof A;
    }
}

$sample = new Sample();
//otomatis memanggil yang berada di trait A
$sample->doA();
// otomatis memanggil yang berada di trait B
$sample->doB();

// keterangan
// nb : jika kita menggunakan lebih dari satu trait, lalu terdapat function yang sama di trait tersebut maka hal tersebut akan menyebabkan konflik
// nb : jika terjadi konflik seperti ini kita bisa mengatasinya dengan menggunakan kata kunci insteadof