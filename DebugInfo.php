<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Arifin";
$student1->value = 100;
$student1->setSample("hello sample");
$student1->setImportantData("data penting");

var_dump($student1);//otomatis memanggil function __debugInfo()

// penjelasan

// nb : sebelumnya kita sering melakukan debug object menggunakan function var_dump()
// nb : jika kita ingin mengubah isi default dari debug info, kita bisa membuat function __debugInfo() di classnya
// nb : dengan membuat function __debugInfo(), ketika kita melakukan var_dump() pada object, maka secara otomatis function __debugInfo() akan dieksekusi