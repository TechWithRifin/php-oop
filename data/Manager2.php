<?php

class Managers
{
    var string $name;
    var string $title;
    function __construct(string $name="", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name)
    {
        echo "Hi $name, my name is manager $this->name".PHP_EOL;
    }
}

class VicePresidents extends Managers
{
    // construct overriding
    function __construct(string $name)//diperbolehkan
    {
        // di rokemendasikan memanggil constructor parent nya
        parent::__construct($name,"vp");
    }

    // function overriding
    function sayHello()//boleh tapi tidak disarankan
    {
        echo "Hi, my name is VP $this->name".PHP_EOL;
    }
}

// PENTING
// nb : merubah tipe data parameter dan menambah atau mengurangi jumlah parameter saat melakukan function overriding sangat tidak disarankan karena dengan melakukan hal tersebut, kita akan mengubah struktur dari functionnya itu sendiri dan itu berbahaya.
// nb :namun berbeda dengan constructor overriding, kita boleh meng-override dengan mengubah dan menambah atau mengurangi jumlah parameternya, namun direkomendasikan untuk memanggil parent constructornya

// LEBIH DETAIL
// nb : karena constructor sama seperti function, maka constructor pun bisa kita deklarasikan ulang di class childnya
// nb : sebenarnya di PHP, kita bisa mengoverride function dengan parameter yang berbeda, namun sangat tidak disarakan karena tidak aman
// nb : jika kita melakukan override function dengan parameter yang berbeda, maka PHP akan menampilkan WARNING
// nb :namun berbeda dengan constructor overriding, kita boleh meng-override dengan mengubah dan menambah atau mengurangi jumlah parameternya, namun direkomendasikan untuk memanggil parent constructornya