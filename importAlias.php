<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";


use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

// saat membuat object hanya perlu menggunakan nama aliasnya saja
$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

// saat memanggil function hanya perlu menggunakan aliasnya saja
help();

// saat memanggil constant hanya perlu menggunakan aliasnya saja
echo APP . PHP_EOL;

// nb : saat kita menggunakan use, artinya kita tidak perlu lagi menggunakan nama namespace di awal class ketika kita inging membuat object dari class tersebut
// nb : namun bagaimana jika kita ingin mengimport lebih dari satu class dengan nama yang sama?
// nb : untungnya PHP memiliki fitur yang namanya alias
// nb : alias adalah kemampuan membuat nama lain dari class, function atau constant yang kita import
// nb : untuk membuat alias kita bisa menggunakan kata kunci (as) setelah kita melakukan use
// nb : format penulisan : use namaNamespace\namaClass as namaAlias
// nb : sebaiknya kita menggunakan alias hanya pada saat kita ingin mengimport lebih dari satu class, function atau constant dengan nama yang sama saja.