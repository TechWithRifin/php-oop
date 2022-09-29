<?php

require_once "data/Programmer.php";

$company = new Company();

// tipe object menjadi Programmer
$company->programmer = new Programmer("arifin");
var_dump($company);

// tipe object menjadi BackendProgrammer
$company->programmer = new BackendProgrammer("arifin");
var_dump($company);

// tipe object menjadi FrontendProgammer
$company->programmer = new FrontendProgrammer("arifin");
var_dump($company);

sayHelloProgrammer(new Programmer("arifin"));
sayHelloProgrammer(new BackendProgrammer("arifin"));
sayHelloProgrammer(new FrontendProgrammer("arifin"));


// polimorpism adalah kemampuan sebuah object berubah bentuk menjadi bentuk lain dan erat hubungannya dengan inheritance
// dalam oop sebuah class dapat digunakan sebagai tipe data
// jadi properti dengan tipe data Programmer dapat berisi data object programmer ataupun turunan dari class programmer
// polimorpism hanya dapat berbentuk class yang dijadikan tipedata pada property dan turunan dari class tersebut saja (perubahan bentuknya terbatas hanya terhadap semua class turunannya saja)
// class yang di gunakan sebagai tipe data pada property haruslah class parentnya agar otomatis bisa memakai bentuk object dari semua turunannya