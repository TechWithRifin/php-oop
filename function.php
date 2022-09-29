<?php

require_once "data/Person.php";

// membuat object baru
$person = new Person();

$person->sayHello('arifin');

echo $person->sayGoodBy().PHP_EOL;

var_dump($person);

// nb: untuk membuat object baru harus menggunakan kata kunci new di ikuti dengan nama class yang akan digunakan sebagai object

?>