<?php

interface HelloWorld{
    function sayHello():void;
}

// anonymous class
$helloWorld = new class implements HelloWorld{
    public function sayHello():void{
        echo "Hello World" . PHP_EOL;
    }
};

$helloWorld->sayHello();

// anonymous class dengan constructor
$helloCarl = new class("carl") implements HelloWorld{
    public string $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    public function sayHello():void{
        echo "hello $this->name".PHP_EOL;
    }
};

$helloCarl->sayHello();

// penjelasan

// anonymous class
// nb : anonymous class atau class tanpa nama adalah kemampuan mendeklarasikan class, sekaligus meng-instansiasi objectnya secara langsung
// nb : anonymous class sangat cocok ketika kita berhadapan dengan kasus membuat implementasi interface atau abstract class sederhana, tanpa harus membuat classya terlebih dahulu
// nb : anonymous class sangat tidak disarankan untuk kasus yang sangat kompleks

// nb : anonymous class juga mendukung constructor
// nb : jadi kita bisa menambahkan construcktor jika kita mau