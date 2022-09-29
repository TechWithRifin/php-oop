<?php

// 1. default iteration
class Data{
    var string $first = "first";
    public string $second = "second";
    protected string $third = "third";
    private string $forth = "forth";
}

$data = new Data();

foreach ($data as $property => $value){
    echo "$property : $value".PHP_EOL;
}

// 2. manual iteration dengan IteratorAggregate interface
class Data2 implements IteratorAggregate {
    var string $first = "first";
    public string $second = "second";
    protected string $third = "third";
    private string $forth = "forth";

    // override function bawaan php untuk iterasi
    // ketika melakukan perulangan foreach maka php secara otomatis akan memanggil function ini
    public function getIterator(){
        // berisi list data dari property apa saja yang boleh di ekpos
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->forth,
        ];
        return new ArrayIterator($array);
    }
}

$data2 = new Data2();

foreach ($data2 as $property => $value){
    echo "$property : $value".PHP_EOL;
}


// 3. iteration dengan generator
class Data3 implements IteratorAggregate {
    var string $first = "first";
    public string $second = "second";
    protected string $third = "third";
    private string $forth = "forth";

    // override function bawaan php untuk iterasi
    // ketika melakukan perulangan foreach maka php secara otomatis akan memanggil function ini
    public function getIterator(){
        // dengan menggunakan generator kita tidak perlu lagi membuat array dan return new ArrayIterator
        // kode menjadi lebih ringkas
        // yield akan membuat key dan value menjadi iterator
        // untuk membuat object iteration formatnya seperti di bawah
            yield "first" => $this->first;
            yield "second" => $this->second;
            yield"third" => $this->third;
            yield "forth" => $this->forth;
    }
}

$data3 = new Data3();

foreach ($data3 as $property => $value){
    echo "$property : $value".PHP_EOL;
}

// keterangan

// default iteration
// nb : saat kita membuat object dari sebuah class, kita bisa melakukan iterasi ke semua properties yang terdapat di object tersebut menggunakan foreach
// nb : hal ini mempermudah kita saat ingin mengakses semua properties yang ada di object
// nb : secara default, hanya properties yang public / var yang bisa di akses oleh foreach

// manual iteration dengan IteratorAggregate interface
// nb : sebelumnya kita melakukan iterasi data di properties secara otomatis menggunakan foreach
// nb : jika kita ingin menangani hal ini secara manual, kita bisa menggunakan Iterator
// nb : Iterator adalah interface yang digunakan untuk melakukan iterasi, namun membuat iterator secara manual lumayan cukup ribet, oleh karena itu sekarang kita akan gunakan ArrayIterator, yaitu iterator yang menggunakan array sebagai data iterasinya
// nb : dan agar class kita bisa di iterasi secara manual, kita bisa menggunakan interface IteratorAggregate, disana kita hanya butuh meng-override function getIterator() yang mengembalikan data iterator  