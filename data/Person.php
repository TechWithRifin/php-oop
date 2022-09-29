<?php

class Person{

    // deklarasi constant
    // tidak seperti property, dalam constant nilai dari variabel tidak dapat diubah
    // dalam deklarasi constant di rekomendasikan menggunakan format UPPERCASE
    const AUTHOR = 'ahmad arifin';
    const VERSION = '1.0.0';

    // deklarasi property
    var string $name;
    var ?string $address;//property ini boleh berisi null
    var string $country = "indonesia"; // perperty ini memiliki nilai default yaitu indonesia
    var ?int $age;

    // construct adalah function yang akan otomatis di panggil pertama kali saat kita membuat sebuah object
    function __construct(string $name='', ?string $address='')
    {
        $this->name = $name;
        $this->address = $address;
    }

    // deklarasi function
    function sayHello(?string $name = '')
    {
        // $this->name akan mengakses value dari property name
        // $name akan mengakses value dari argumen $name
        if(is_null($name) || $name == ''){
            // PHP_EOL berfungsi untuk pindah baris
            echo "hi, my name is $this->name".PHP_EOL;
        }else{
            echo "hi $name, my name is $this->name".PHP_EOL;
        }
    }

    function sayGoodBy()
    {
        return "good by";
    }

    function info()
    {
        // keyword self berfungsi untuk mengakses class saat ini
        echo "author : ".self::AUTHOR. PHP_EOL;
    }

    // destruct adalah function yang akan otomatis di eksekusi saat data object di hapus dari memory (object selesai digunakan)
    // nb : saat kita membuat sebuah object sistem akan otomatis menyimpannya di dalam memory dan juga otomatis dihapus jika sudah selesai di gunakan 
    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }

    // nb: untuk membuat property harus ada var di depannya. Property ini konsepnya mirip variabel namun digunakan untuk object oriented programming
    // untuk memberi tipe data pada sebuah property bisa di berikan dengan format var tipedata variabel
    // untuk mengatur jika property dapat berisi null maka beri tanda tanya (?) sebelum tipe data
    // property juga bisa di setting default valuenya
    
    // nb: $this ini berfungsi untuk mengakses object saat ini
    // nb: $this ini berguna jika kita ingin mengakses property atau function lain di class yang sama

    // nb: jika di dalam class (misal di fuction) kita ingin mengakses constant, kita perlu mengakses menggunakan NamaClass::NAMA_CONSTANT.namun jika di dalam class yang sama, kita bisa menggunakan keyword 'self' untuk mempermudahnya

    // nb : saat kita membuat sebuah object, maka itu mirip seperti memanggil sebuah function, karena menggunakan tanda kurung ()
    // nb : di dalam class PHP, kita bisa membuat constructor, constructor adalan function yang akan di pangging saat pertama kali object dibuat.
    // nb : mirip seperti function, kita bisa memberi parameter pada constructor 
    // nb : nama constructor di PHP haruslah __construct

    // nb : destructor adalah function yang akan dipanggil ketika object dihapus dari memory
    // nb : biasanya ketika object tersebut sudah tidak lagi digunakan, atau ketika aplikasi akan mati
    // nb : untuk membuat function destructor, kita bisa menggunakan nama function __destruct()
    // nb : khusus untuk destructor, kita tidak boleh menambahkan function argument
    // nb : dalam penggunaan real, destructor biasanya dipakai untuk menutup koneksi ke database atau menutup proses menulis ke file, sehingga tidak terjadi memory leak

    // sumber type property https://stitcher.io/blog/typed-properties-in-php-74
}