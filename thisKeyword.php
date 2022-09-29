<?php

require_once "data/Person.php";

// membuat object baru
$person = new Person();

$person->name = 'arifin';

$person->sayHello('budi');

$person2 = new Person();

$person2->name = 'carl';

$person2->sayHello('mark');

$person3 = new Person();

$person3->name = 'arifin';

$person3->sayHello();

// nb: untuk membuat object baru harus menggunakan kata kunci new di ikuti dengan nama class yang akan digunakan sebagai object

// nb: this berfungsi untuk mengakses object saat ini