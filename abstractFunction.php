<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "catty";
$cat->run();

$dog = new Dog();
$dog->name = "doggy";
$dog->run();

// nb : saat kita membuat abstract class, kita bisa membuat abstract function juga di dalam abstract class tersebut
// nb : saat membuat sebuah abstract function, kita tidak boleh membuat block function (body atau {}) untuk function tersebut karena akan error
// nb : abstract function yang sudah dibuat wajib di override di class child.(jika tidak maka akan error)
// nb : abstract function tidak boleh memiliki access modifier private karena nanti tidak dapat di override di child class (public dan protected boleh slur)