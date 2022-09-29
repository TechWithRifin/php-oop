<?php

class SocialMedia{

}

// final class
// class facebook tidak bisa diturunkan / tidak bisa dijadikan parent class 
final class Facebook extends SocialMedia{

}

// ini akan error
// class FakeFacebook extends Facebook{

// }

// final function
class Instagram {
    // function login tidak bisa di override
    final public function login(string $username, string $password):bool {
        return true;
    }
}

class FakeInstagram extends Instagram{
    // ini akan error
    public function login(string $username, string $password):bool{
        return false;
    }
}

// keterangan

// final class
// nb : kata kunci final bisa digunakan pada class, dimana jika kita menggunakan kata kunci final sebelum kata kunci class, maka itu menandakan bahwa class tersebut tidak bisa atau tidak boleh diwariskan.
// nb : dengan kata lain semua class child dari class tersebut akan error

// final function
// kata kunci final juga bisa digunakan di function
// jika sebuah function kita tambahkan kata kunci final, maka artinya function tersebut tidak bisa dioverride lagi di class child nya
// ini sangat cocok jika kita ingin mengunci implementasi dari sebuah method agar tidak bisa diubah lagi oleh class childnya
?>