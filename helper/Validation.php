<?php

// ini menerapkan function polimorpism
function validateLoginRequest(LoginRequest $Request){
    if(!isset($Request->username)){
        throw new ValidationException("username is null");
    }else if(!isset($Request->password)){
        throw new ValidationException("password is null");
    }else if (trim($Request->username) == ""){
        throw new Exception("username is empty");
    }else if (trim($Request->password) == ""){
        throw new Exception("password is empty");
    }else{
        echo "login success".PHP_EOL;
    }
}

// penjelasan
// membuat exception
// nb : exception biasanya terjadi di function
// nb : di dalam kode program kita, untuk membuat exception kita cukup menggunakan kita kunci throw di ikuti dengan object exceptionnya