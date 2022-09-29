<?php

namespace Data;

abstract class Animal
{
    public string $name;

    // function run wajib di override di class child
    abstract public function run(): void;
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "cat $this->name is running".PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "dog $this->name is running".PHP_EOL;
    }
}

// nb : saat kita membuat abstract class, kita bisa membuat abstract function juga di dalam abstract class tersebut
// nb : saat membuat sebuah abstract function, kita tidak boleh membuat block function (body atau {}) untuk function tersebut karena akan error
// nb : abstract function yang sudah dibuat wajib di override di class child.(jika tidak maka akan error)
// nb : abstract function tidak boleh memiliki access modifier private karena nanti tidak dapat di override di child class (public dan protected boleh slur)