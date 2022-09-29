<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();

// ValidationUtil::validateReflection($request);

class RegisterUserRequest{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();

ValidationUtil::validateReflection($register);

// penjelasan
// nb : reflection adalah membaca struktur kode pada saat aplikasi berjalan
// nb : reflection adalah fitur yang biasanya digunakan saat kita membuat framework atau library

// keuntungan menggunakan reflection
// nb : kita hanya sekali membuat function dan itu bisa digunakan pada semua object class berbeda beda
// misal : kita ingin membuat function validation untuk 5 object dengan properties yang berbada-beda. jika kita membuat function validation tanpa reflection maka kita harus membuat 5 function validation karena setiap object memiliki properties yang berbeda-beda. jika kita membuat validation dengan menggunakan reflection maka kita hanya akan membuatnya sekali walaupun setiap object nya memiliki properties yang berbeda beda karena reflection dapat membaca setiap properties dari setiap object tersebut