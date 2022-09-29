<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// import group class - class yang ada didalam namespace Data\One
use Data\One\{Conflict as Conflict1, Sample, Dummy};

// import group function - function yang ada didalam namespace Helper
use function Helper\{helpMe , sayHello};

// import group constant - constant yang ada didalam namespace Helper
use const Helper\{APPLICATION, NAME};

$conflict = new Conflict1();
$dummy = new Dummy();
$sample = new Sample();

helpMe();
sayHello();

echo APPLICATION . PHP_EOL;
echo NAME . PHP_EOL;

// nb : kadang kita butuh melakukan import banyak hal di satu namespace yang sama
// nb : PHP memiliki fitur group use, dimanam kita bisa import beberapa class, function atau constant dalam satu perintah use
// nb : untuk melakukan itu, kita bisa menggunakan tanda kurung kurawal ({})
// nb : import group ini hanya bisa digunakan untuk class class yang berada di dalam namespace yang sama saja.
// nb : kita juga bisa memberi alias pada class yang kita import dengan format namaNamespace\{namaCLass as namaAlias} (contohnya seperti Conflict as Conflict1 di atas)