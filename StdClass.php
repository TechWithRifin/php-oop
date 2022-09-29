<?php

$array = [
    "firstName"=>"carl",
    "middleName"=>"mark",
    "lastName"=>"michael"
];

// konversi array ke object
$object = (object)$array;

var_dump($object);

echo "first name = $object->firstName".PHP_EOL;
echo "middle name = $object->middleName".PHP_EOL;
echo "last name = $object->lastName".PHP_EOL;

// konversi object ke array
$arrayLagi = (array)$object;//berubah menjadi stdClass

var_dump($arrayLagi);

echo "first name = ".$arrayLagi["firstName"].PHP_EOL;
echo "middle name = ".$arrayLagi["middleName"].PHP_EOL;
echo "last name = ".$arrayLagi["lastName"].PHP_EOL;

require_once "data/Person.php";

$person = new Person("arifin","malang");
var_dump($person);

$arrayPerson = (array)$person;
var_dump($arrayPerson);


// keterangan

// nb : stdClass adalah class kosong bawaan dari PHP
// nb : stdClass biasanya digunakan ketika kita melakukan konversi dari tipe data lain menjadi tipe data object
// nb : stdClass sangat berguna ketika misal kita ingin melakukan konversi dari tipe data array ke object secara otomatis

// keynya adalah propertynya dan valuenya adalah value dari propertynya