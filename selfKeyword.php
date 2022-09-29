<?php

require_once "data/Person.php";

// membuat object baru
$person = new Person();
$person2 = new Person();

$person->info();
$person2->info();

// nb: jika di dalam class (misal di fuction) kita ingin mengakses constant, kita perlu mengakses menggunakan NamaClass::NAMA_CONSTANT.namun jika di dalam class yang sama, kita bisa menggunakan keyword 'self' untuk mempermudahnya (liat class Person pada function info)