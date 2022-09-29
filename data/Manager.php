<?php

// parent class
class Manager{
    var string $name;
    
    function sayHello(string $name): void
    {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
    // nb void ini berfungsi untuk memberitahu orang yang akan menggunakan function ini jika function ini tidak mengembalikan value (tidak ada return nya)
}

// child class
class VicePresident extends Manager{
    // class ini otomatis akan memiliki semua property dan function yang di miliki oleh class manager
    // jadi kita dapat menggunakan property name dan function sayhello yang ada di class Manager di dalam class ini

    // function overriding
    function sayHello(string $name): void
    {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}

// nb : inheritance adalah kemampuan untuk menurunkan sebuah class ke class lain dalam artian kita bisa membuat class parent dan class child
// nb : class child, hanya bisa punya satu class parent, namun class parent bisa punya banyak class child
// nb : saat sebuah class diturunkan, maka semua property dan function yang ada di class parent, secara otomati akan di miliki oleh class child
// nb : untuk melakukan pewarisan, di class child, kita harus menggunakan kata kunci extends lalu diikuti dengan nama class parentnya

// nb : function overriding adalah kemampuan mendeklarasikan ulang function yang sudah ada di parent class pada child class
// nb : saat kita melakukan proses overriding tersebut, secara otomatis ketika kita membuat object dari class child, function yang ada di class parent yang sudah di override tidak bisa di akses lagi

?>