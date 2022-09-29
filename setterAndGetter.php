<?php

require_once "data/Category.php";

$category = new Category();

$category->setName("handphone");
$category->setExpensive(true);

// jika mengubah data dengan data kosong maka property tidak akan berubah
$category->setName("");

echo "Name : {$category->getName()}".PHP_EOL;
echo "Expensive : {$category->isExpensive()}".PHP_EOL;

// nb : encapsulation artinya memastikan data sensitif sebuah object tersembunyi dari akses luar
// nb : hal ini bertujuan agar kita bisa menjaga data sebuah object tetap baik dan valid
// nb : untuk mencapai ini, biasanya kita akan membuat semua properties menggunakan access modifier private, sehingga tidak dapat di akses atau diubah dari luar class tersebut
// agar bisa di ubah, kita akan menyediakan function untuk mengubah dan mendapatkan properties terebut yaitu function setter untuk mengubah dan function getter untuk mengambil data property. 
// nb: di PHP, proses encapsulation sudah dibuat standararisasinya, dimana kita bisa menggunakan getter dan setter method
// nb : getter adalah function yang dibuat untuk mengambil data property
// nb : setter adalah function untuk mengubah data property

// benefit menggunakan cara ini adalah:
// 1. kita dapat secara leluasa mengatur apakah property yang kita buat dapat di ubah atau tidak datanya dengan cara memberi function setter jika boleh diubah dan tidak memberi function setter jika tidak boleh diubah
// 2. kita dapat secara leluasa mengatur apakah property yang kita buat boleh di ambil atau tidak datanya dengan cara memberi function getter jika boleh diambil dan tidak memberi function getter jika tidak boleh diambil
// 3. kita dapat memberikan velidation di setter. contohnya tidak memperbolehkan mengisi property dengan data kosong.