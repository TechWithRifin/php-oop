<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id ="1";
$student1->name ="arifin";
$student1->value =100;


$student2 = new Student();
$student2->id ="1";
$student2->name ="arifin";
$student2->value =100;


var_dump($student1 == $student2);//true
var_dump($student1 === $student2);//false
var_dump($student1 === $student1);//true

// penjelasan

// nb : sama seperti tipe data yang lain, untuk membandingkan dua buah object, kita bisa menggunakan operator  == (equals) dan === (identity)
// nb : operator == (equals) membandingkan semua properties yang terdapat di object tersebut, dan tiap properties juga akan dibandingkan menggunakan operator == (equals)
// nb : sedangkan operator === (identity), maka akan membandingkan apakah object identik, artinya mengacu ke object yang sama
// nb : equals membadingkan semua property
// nb : identity memastikan bahwa dia adalah object yang sama