<?php

$dateTime = new DateTime();
// otomatis menampilkan waktu saat ini
var_dump($dateTime);

// merubah tanggal (format Y, m ,d ) *nb:format harus lengkap dan tidak terbalik
$dateTime->setDate(1990, 01, 20);
// merubah waktu (format H, M, S) *nb:format harus lengkap dan tidak terbalik
$dateTime->setTime(10, 01, 20);

var_dump($dateTime);

// menambah 1 tahun
$dateTime->add(new DateInterval("P1Y"));// P itu wajib bawaan php, 1 untuk jumlah, Y untuk memberitahu bahwa itu adalah tahun (Year)

var_dump($dateTime);

// menguraing 1 bulan
$minusOneMonth = new DateInterval("P1M");// P itu wajib bawaan php, 1 untuk jumlah, Y untuk memberitahu bahwa itu adalah bulan (Month)
$minusOneMonth->invert = true; //jika true maka itu mengurangi jika false maka itu menambah (invert secara default bernilai false)
$dateTime->add($minusOneMonth);

var_dump($dateTime);


$now = new DateTime();
var_dump($now);
// merubah timeZone
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

// merubah datetime menjadi string
$string = $now->format("Y-m-d H:i:s");
echo "Waktu Saat Ini : $string".PHP_EOL;

//merubah string menjadi datetime
$date = DateTime::createFromFormat("Y-m-d H:i:s","2021-10-10 10:10:10", new DateTimeZone("Asia/Jakarta"));//jika format salah akan menghasilkan return false
// new DateTimeZone("Asia/Jakarta") bersifat opsional

var_dump($date);
// penjelasan

// dateTime
// nb : biasanya dalam bahasa pemrograman sudah disediakan cara untuk memanipulasi data waktu, termasuk di PHP
// nb : di PHP, kita bisa menggunakan class DateTime untuk memanipulasi data waktu
// nb : Ada banyak sekali function di class DateTime yang bisa kita gunakan untuk memanipulasi data waktu

// DateTime Function

// setTime($hours, $minute, $second) mengubah waktu DateTime
// setDate($year, $month, $day) mengubah tanggal DateTime
// setTimestanp($unixTimestamp) mengubah unix timestamp DateTime

// DateInterval
// nb : kadang kita hanya ingin memanipulasi waktu dan tanggal sebagian sebagian saja, misal hanya menambah 1 tahun atau mengurangi beberapa hari
// nb : hal ini bisa dilakukan dengan function milik DateTime yaitu function add()
// nb : namun functtion add() tersebut menerima parameter berupa DateInterval
// nb : saat menggunakan DateInterval duration, kita perlu menentukan berapa banyak kita menambah interval
// nb : untuk membuat duration harus diawali karakter P yang artinya period diteruskan dengan angka (misal 1) yang artinya jumlah waktu atau tanggal yang ingin ditambah atau dikurangi dan terakhir kode duration
// contoh : new DateInterval(P2Y) //menambah 2 tahun

// kode duration
// nb : Y = tahun
// nb : M = bulan
// nb : D = hari
// nb : W = minggu
// nb : H = Jam
// nb : M = menit
// nb : S = detik

// DateTimeZone
// nb : saat kita membuat object DateTime, dia akan secara otomatis membuat waktu saat ini sesuai dengan timezone yang di setting di konfigurasi date.timezone di file php.ini
// kita bisa mengubahnya menggunakan function setTimeZone dengan argument object DateTimeZone(nama TImeZone)

// Format DateTime
// nb : kadang kita ingin membuat representasi string dari DateTime yang sudah kita buat
// nb : hal ini bisa kita lakukan menggunakan function format()
// nb : function format() menerima argument berupa format string, ini bisa kita gunakan untuk memanipulasi cara kita menampilkan string format waktu 

// parse DateTime
// nb : selain format DateTime menjadi string, di PHP juga kita bisa melakukan hal sebaliknya, yaitu memparsing string menjadi DateTime sesuai dengan format yang kita mau
// nb : untuk melakukan itu, kita bisa menggunakan static function createFromFormat("format DateTime","string DateTime sesuai format DateTime") dari class dateTime