<?php

class Zero {
    private array $properties =[];

    // mengambil data berdasarkan property namenya yang tidak ada
    public function __get($name){
        if(isset($this->properties[$name])){
            return $this->properties[$name];
        }
        else{
            return "property $name belum di set";
        }
    }

    // mengubah data berdasarkan property namenya
    public function __set($name, $value){
        return $this->properties[$name] = $value;
    }

    // mengecek apakah property sudah di set berdasarkan property namenya
    public function __isset($name):bool{
        return isset($this->properties[$name]);
    } 

    // menghapus data property berdasarkan property namenya
    public function __unset($name):void{
        unset($this->properties[$name]);
    }

    // dieksekusi ketika akses function yang tidak tersedia
    public function __call($name, $arguments){
        $join = join(",",$arguments);
        echo "Call function $name with arguments $join".PHP_EOL;
    }

    // dieksekusi ketika akses static function yang tidak ada
    public static function __callStatic($name, $arguments){
        $join = join(",",$arguments);
        echo "call static function $name with arguments $join".PHP_EOL;
    }
}

$zero = new Zero();

$zero->firstName = "ahmad";
$zero->lastName = "arifin";

echo "first name : $zero->firstName".PHP_EOL;
echo "last name : $zero->lastName".PHP_EOL;

echo isset($zero->firstName) . PHP_EOL;
echo isset($zero->lastName) . PHP_EOL;

unset($zero->firstName);
unset($zero->lastName);

echo "first name : $zero->firstName".PHP_EOL;
echo "last name : $zero->lastName".PHP_EOL;

$zero->sayHello("ahmad","arifin");
Zero::sayHello("ahmad","arifin");


// penjelasan

// overloading
// nb : overloading adalah kemampuan secara dinamis membuat properties atau function
// nb : ini mirip meta programming di bahasa pemrograman lain seperti ruby
// nb : Namun ini berbeda dengan function overloading di bahasa pemrograman seperti java (php tidak bisa membuat function yang sama didalam satu class seperti java)
// nb : overloading ini erat kaitannya dengan magic function yang sebelumnya sudah di bahas

// properties overloading
// nb : saat kita mengakses properties, maka secara otomatis properties akan diakses.
// nb : namun jika ternyata properties tersebut tidak tersedia di objectnya (property tidak di inisiasi di class), maka PHP tidak secara langsung menjadikan itu error melainkan PHP akan melakukan fallback ke magic function.
// nb : jika ada magic function(__get,__set,__isset,__unset) di dalam class tersebut maka PHP akan melakukan fallback ke magic function tersebut jika tidak ada maka secara otomatis akan dikembalikan error
// nb : dengan demikian kita bisa membuat properties secara dinamis dengan memanfaatkan magic function tersebut
// nb : ada beberapa magic function yang bisa digunakan untuk properties overloading

// list magic function untuk properties overloading
// nb : __set($name, $value) dieksekusi ketika mengubah properties yang tidak tersedia
// nb : __get($name) dieksekusi ketika mengakses properties yang tidak tersedia
// nb : __isset($name) dieksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia
// nb : __unset($name) dieksekusi ketika menggunakan unset() properties yang tidak tersedia 

// function overloading
// nb : saat kita mengakses function, maka secara otomatis function akan diakses.
// nb : namun jika ternyata function tersebut tidak tersedia di objectnya atau diclassnya, maka PHP tidak secara langsung menjadikan itu error melainkan PHP akan melakukan fallback ke magic function.
// nb : jika ada magic function(__call,__callStatic) di dalam class tersebut maka PHP akan melakukan fallback ke magic function tersebut jika tidak ada maka secara otomatis akan dikembalikan error
// nb : dengan demikian kita bisa membuat function secara dinamis dengan memanfaatkan magic function tersebut
// nb : ada beberapa magic function yang bisa digunakan untuk function overloading

// list magic function untuk function overloading
// nb : __call($name, $arguments) dieksekusi ketika memanggil function yang tidak tersedia
// nb : static __callStatic($name, $arguments) dieksekusi ketika memanggil static function yang tidak tersedia