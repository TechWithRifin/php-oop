<?php

require_once "data/Person.php";

$person = new Person("arifin","trenggalek");

echo "program selesai".PHP_EOL;

// deklarasi destruct ada di class Person

// nb : destructor adalah function yang akan dipanggil ketika object dihapus dari memory
// nb : biasanya ketika object tersebut sudah tidak lagi digunakan, atau ketika aplikasi akan mati
// nb : untuk membuat function destructor, kita bisa menggunakan nama function __destruct()
// nb : khusus untuk destructor, kita tidak boleh menambahkan function argument
// nb : dalam penggunaan real, destructor biasanya dipakai untuk menutup koneksi ke database atau menutup proses menulis ke file, sehingga tidak terjadi memory leak