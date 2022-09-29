<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

// nilai dari property static juga dapat dirubah
MathHelper::$name = "arifin";

echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10,10,10,20,30);

echo "result = $result".PHP_EOL;

// nb : static biasanya digunakan untuk class - class helper atau utilities yang tidak butuh di instance (dibuat objectnya) terlebih dahulu
// nb : bisa langsung di akses dari classnya tanpa harus bikin objectnya terlebih dahulu

// nb : kata kunci static adalah keyword yang bisa kita gunakan untuk membuat properties atau function di class dan dapat diakses secara langsung tanpa menginstansiasi class terlebih dahulu (bisa diakses tanpa harus membuat objectnya terlebih dahulu).
// nb : saat kita buat static properties atau function, secara otomatis hal itu tidak akan berhubungan lagi dengan class instance yang kita buat (static function / static properties tidak dapat dipanggil melalui object)
// nb : untuk cara mengakses static properties dan function sama seperti mengakses constant, kita bisa menggunakan operator ::
// nb : format akses static function NamaCLass::namaFunction()
// nb : format akses static property NamaClass::namaProperties
// nb : static function tidak bisa mengakses function function biasa, karena function biasa menempel pada class intance (menempel pada object) sedangkan static functiong tidak (menempel pada class)
// nb : jadi static function hanya dapat mengakses constan, static function dan static properties saja