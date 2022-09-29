<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id ="1";
$student1->name ="arifin";
$student1->value =100;

// cara penggunaan

// cara 1 (dengan konversi object ke string)
$string  = (string)$student1;//otomatis memanggil function __toString()
echo $string . PHP_EOL;

// cara 2 (dengan langsung echo objectnya)
echo $student1 . PHP_EOL;//otomatis memanggil function __toString()


// penjelasan

// __toString()

// nb : __toString function merupakan salah satu magic function yang digunakan sebagai representasi string sebuah object
// nb : jika misal kita ingin membuat string dari object kita, kita bisa membuat function __toString()
// nb : misal ketika kita melakukakn konversi object $student1 menjadi string, maka secara otomatis function __toString() yang akan dieksekusi