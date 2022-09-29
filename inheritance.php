<?php

require_once "data/Manager.php";

$manager = new Manager();

$manager->name = "arifin";
$manager->sayHello('carl');

$vp = new VicePresident();

$vp->name = 'mark';
$vp->sayHello('michael');

// nb : inheritance adalah kemampuan untuk menurunkan sebuah class ke class lain dalam artian kita bisa membuat class parent dan class child
// nb : class child, hanya bisa punya satu class parent, namun class parent bisa punya banyak class child
// nb : saat sebuah class diturunkan, maka semua property dan function yang ada di class parent, secara otomati akan di miliki oleh class child
// nb : untuk melakukan pewarisan, di class child, kita harus menggunakan kata kunci extends lalu diikuti dengan nama class parentnya

?>