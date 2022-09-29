<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
// $loginRequest->username = "a";
// $loginRequest->password = "a";


// try catch

//cara 1 
try{
    validateLoginRequest($loginRequest);
}catch(ValidationException $exception){
    echo "validation error : {$exception->getMessage()}".PHP_EOL;
}catch(Exception $exception){
    echo "Error : {$exception->getMessage()}".PHP_EOL;
}

// cara 2
try{
    validateLoginRequest($loginRequest);
}catch(ValidationException | Exception $exception){
    echo "Error : {$exception->getMessage()}".PHP_EOL;

    // debugException
    
    // cara 1 dump trace (return array)
    var_dump($exception->getTrace());
    
    //cara 2 string trace (return string)
    echo $exception->getTraceAsString();

}finally{
    echo "Error atau Success, akan dieksekusi".PHP_EOL;
}


// penjelasan

// Exception
// nb : saat kita membuat aplikasi, kita tidak akan terhindar dengan yang namanya error
// nb : di PHP, error direpresentasikan dengan istilah exception, dan semua semua direpresentasikan dalam bentuk class exception
// nb : kita bisa menggunakan class exception sendiri, atau menggunakan yang sudah disediakan oleh PHP
// nb : jika kita ingin membuat exception sendiri, maka kita harus membuat class yang implement interface throwable (rumit) atau extends turunan dari interface throwable (misal : class Exception)

// membuat exception (helper/Validation.php)
// nb : exception biasanya terjadi di function
// nb : di dalam kode program kita, untuk membuat exception kita cukup menggunakan kita kunci throw di ikuti dengan object exceptionnya 

// try-catch
// nb : saat kita memanggil sebuah function yang bisa menyebabkan exception, maka kita disarankan menggunakan try-catch expression di PHP
// nb : ini gunanya agar kita bisa menangkap exception yang terjadi, karena jika tidak ditangkap, lalu terjadi exception, maka secara otomatis program kita akan berhenti
// nb : cara menggunakan try-catch expression di PHP sangat mudah ,di block try, kita tinggal panggil method yang bisa menyebabkan exception dan di block catch, kita bisa melakukan sesuatu jika terjadi exception (penanganan exception ada di block catch)
// nb : jika object exception nya lebih dari 1 maka kita bisa melakukan multiple catch

// finally keyword
// nb : dalam try-catch, kita bisa menambahkan block finally
// nb : block finally ini adalah block dimana akan selalu dieksekusi  baik terjadi exception ataupun tidak
// nb : ini sangat cocok ketika kita ingin melakukan sesuatu, tidak peduli sukses ataupun gagal, misal di block try kita ingin membaca file, di block catch kita akan tangkap jika terjadi error, dan di block finally error ataupun sukses membaca file, kita wajib menutup koneksi ke file tersebut biar tidak menggantung di memory (memory leak)

// debug exception
// nb : exception di PHP memiliki sebuah function bernama getTrace()
// nb : function getTrace() berisikan informasi dari exception yang terjadi, seperti lokasi file, baris ke berapa, function mana sampai argument yang di kirim di function tersebut apa
// nb : ini sangat cocok untuk kita jika ingin mendebug ketika terjadi exception