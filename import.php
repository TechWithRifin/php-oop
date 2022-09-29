<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// format script saat melakukan import class use namaNamespace\namaClass
// format script saat melakukan import function use function namaNamespace\namaClass
// format script saat melakukan import constant use const namaNamespace\namaClass

// import class yang ada di dalam namespace
use Data\One\Conflict;
// Conflict adalah nama classnya
// Data\One adalah nama namespacenya

// import function yang ada di dalam namespace
use function Helper\helpMe;
// helpMe adalah nama functionnya
// helper adalah nama namespacenya


// import constant yang ada di dalam namespace
use const Helper\APPLICATION;
// APPLICATION adalah nama constantnya
// helper adalah nama namespacenya

$conflict = new Conflict();

helpMe();

echo APPLICATION . PHP_EOL;


// PENJELASAN
// nb : sebelumnya kita sudah tau bahwa untuk mengakeses suatu class, function atau constant yang ada di dalam namespace kita perlu menyebutkan nama namespacenya di awal
// nb : jika terlalu sering menggunakan class, function atau constant yang sama, maka terlalu banyak duplikasi dengan menyebutkan namespace yang sama berkali - kali
// nb : hal ini bisa kita hindari dengan cara mengimport class, function atau constant tersebut dengan menggunakan keyword use


// nb : saat melakukan import class atau function atau constant kita menggunakan keyword (use)
// nb : import (use) berfungsi untuk mempermudah kita dalam membuat object dengan class berada di dalam namespace, memanggil function yang ada di dalam namespace, dan constant di yang ada di dalam namespace
// nb : dengan menggunakan import (use) kita tidak perlu capek - capek menulis ulang namespace setiap kali ingin membuat object, memanggil function atau memanggil constant yang berada di dalam namespace
// nb : dengan menggunakan import kita hanya akan menulis nama namespacenya sekali yaitu pada keyword use saja.
// nb : kelemahan dari import (use) adalah kita tidak bisa mengimport lebih dari satu class dengan nama yang sama walaupun class tersebut memiliki namespace yang berbeda
// nb : kelemahan tersebut bisa di atasi dengan menggunakan alias