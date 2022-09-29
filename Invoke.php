<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id ="1";
$student1->name ="arifin";
$student1->value =100;

$student1(1,"arifin",true,"tech");//otomatis memanggil function __invoke()

// __invoke() function merupakan function yang dieksekusi ketika object yang kita buat dianggap sebagai function
// misal ketika kita membuat object $student1, lalu kita melakukan $student1(), maka secara otomatis function __invoke() yang akan di eksekusi