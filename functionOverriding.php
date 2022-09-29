<?php

require_once "data/Manager.php";

$manager = new Manager();

$manager->name = "carl";
// memanggil function sayHello yang ada di class manager
$manager->sayHello("mark");

$vp = new VicePresident();
$vp->name = "michael";
// memanggil function sayHello yang sudah di override di class vicepresident
$vp->sayHello("carera");

// nb : function overriding adalah kemampuan mendeklarasikan ulang function yang sudah ada di parent class pada child class
// nb : saat kita melakukan proses overriding tersebut, secara otomatis ketika kita membuat object dari class child, function yang ada di class parent yang sudah di override tidak bisa di akses lagi

?>