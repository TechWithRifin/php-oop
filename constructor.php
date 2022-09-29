<?php

require_once "data/Person.php";

// membuat object baru
$person = new Person("arifin","trenggalek");
$person2 = new Person("carl","italia");

echo "nama : $person->name" . PHP_EOL;
echo "alamat : $person->address" . PHP_EOL;
echo "nama : $person2->name" . PHP_EOL;
echo "alamat : $person2->address" . PHP_EOL;

// deklarasinya ada di class Person
// nb : saat kita membuat sebuah object, maka itu mirip seperti memanggil sebuah function, karena menggunakan tanda kurung ()
// nb : di dalam class PHP, kita bisa membuat constructor, constructor adalan function yang akan di pangging saat pertama kali object dibuat.
// nb : mirip seperti function, kita bisa memberi parameter pada constructor 
// nb : nama constructor di PHP haruslah __construct