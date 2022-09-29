<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Arifin";
$student1->value = 100;
$student1->setSample("hello sample");
$student1->setImportantData("data penting");

var_dump($student1);

// otomatis menyalin semua properties object $student1 beserta valuenya ke dalam object $student2
$student2 = clone $student1;

var_dump($student2);


// keterangan

// keyword clone

// nb : kadang kita ada kebutuhan untuk menduplikasikan sebuah object
// nb : untungnya PHP mendukung object cloning
// nb : kita bisa menggunakan keyword clone untuk membuat duplikasi object
// nb : secara otomatis semua properties di object awal akan di duplikasi ke object baru
// nb : keyword clone dapat menyalin semua properties tanpa batasan walaupun itu property public, protected ataupun private semuanya disalin

// function __clone()

// nb : kadang menyalin semua properties bukanlah yang kita inginkan
// nb : misal saja kita hanya ingin menyalin beberapa properties saja, tidak ingin semuanya (misal hanya ingin menyalin 3 property dari 5 property)
// nb : jika kita ingin memodifikasi cara PHP melakukan clone, kita bisa membuat function di dalam classnya dengan nama function __clone()
// nb : function __clone akan di panggil di object hasil duplikasi setelah proses duplikasi selesai
// jadi jika kita ingin menghapus beberapa properties, bisa kita lakukan di dalam function __clone()
// nb : function __clone berfungsi untuk memodifikasi hasil dari clonenya
// nb : $student1 => clone $student2 => $student2->__clone()
// nb : penjelasan = $student2 menyalin semua properties student1 lalu setelah selesai function __clone akan di panggil secara otomatis