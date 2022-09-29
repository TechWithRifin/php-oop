<?php

class Programmer
{
    public string $name;
    public function __construct(string $name){
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{

}

class FrontendProgrammer extends Programmer
{

}

class Company
{
    // class programmer bisa dijadikan tipe data
    public Programmer $programmer;
}

// function argument polimorpism
function sayHelloProgrammer(Programmer $programmer){
    
    // type check and cast
    if ($programmer instanceof BackendProgrammer){
        echo "Hello backend programmer $programmer->name" . PHP_EOL;
    }else if ($programmer instanceof FrontendProgrammer){
        echo "Hello frontend programmer $programmer->name" . PHP_EOL;
    } else if($programmer instanceof Programmer){
        echo "Hello programmer $programmer->name" . PHP_EOL;
    }

    // untuk mengecek tipe data object, kita tidak perlu konversi secara explisit
    // namun agar lebih aman, sebelum melakukan casts,pastikan kita melakukan type check (pengecekan tipe data), dengan menggunakan instanceof
    // hasil operator instanceof adalah boolean, true jika tipe data sesuai dan false jika tipe data tidak sesuai
}

// nb : konsep dari function argument polimorpism mirip dengan property polimorpism


// polimorpism adalah kemampuan sebuah object berubah bentuk menjadi bentuk lain dan erat hubungannya dengan inheritance
// dalam oop sebuah class dapat digunakan sebagai tipe data
// jadi properti dengan tipe data Programmer dapat berisi data object programmer ataupun turunan dari class programmer
// polimorpism hanya dapat berbentuk class yang dijadikan tipedata pada property dan turunan dari class tersebut saja (perubahan bentuknya terbatas hanya terhadap semua class turunannya saja)
// class yang di gunakan sebagai tipe data pada property haruslah class parentnya agar otomatis bisa memakai bentuk object dari semua turunannya