<?php

// Property ini konsepnya mirip variabel namun digunakan untuk object oriented programming

// ini berfungsi untuk disable php otomatis mengkonversi value ke tipe data lain (type juggling) lebih jelasnya bisa lihat nb dibawah
declare(strict_types=1);

require_once "data/Person.php";

$person = new Person();

// mengatur value property
$person->name = 'arifin';
$person->address = 'trenggalek';
$person->country = 'indonesia';
$person->age = 12;

var_dump($person);

// mengambil data dari property

echo "nama : $person->name \n";
echo "alamat : $person->address \n";
echo "negara : $person->country \n";

// membuat object baru yang ke 2

$person2 = new Person();
// mengatur value property
$person2->name = 'carl';
$person2->address = 'gotham';
$person2->country = 'amerika serikat';
$person2->age = 10;

var_dump($person2);


// nb : untuk mengakses (mengatur value/mengambil data) property harus menggunakan format namaObject->namaProperty

// nb : object sifatnya bisa digunakan berulang - ulang tanpa ada batasan.

// nb contoh type juggling : jika kita mendeklarasi property dengan tipe data string dan kita memasukkan value dengan tipe data int maka php otomatis mengkonversi value dengan tipe data int tersebut ke tipe data string. 
?>