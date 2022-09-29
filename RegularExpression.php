<?php

// mencari semua pattern(karakter/kata/kalimat) yang sama
$matches=[];
$result = preg_match_all("/mad|ari/","ahmad arifin",$matches);


var_dump($result);
var_dump($matches);

// mengganti semua pattern(karakter/kata/kalimat) yang sama
$result = preg_replace("/anjing|bangsat/","*****","dasar kau anjing bangsat");

var_dump($result);

// memisahkan string sesuai pattern
$result  = preg_split("/[\s,-]/","ahmad arifin,belajar,php-oop");//menghasilkan array

var_dump($result);

// penjelasan

// regular expression
// nb : PHP mendukung regular expression yang kompatibel dengan bahasa pemrograman perl
// nb :  regular expression merupakan fitur yang digunakan untuk melakukan pencarian di string menggunakan pola tertentu 
// nb : untuk membuat pattern di regular expression, detailnya bisa dibaca disini: www.php.net/manual/en/pcre.pettern.php

// function regular expression
// nb : preg_match_all($pattern,$subject) digunakan untuk mencari semua pattern yang sama yang ada di dalam subject
// nb : preg_replace($pattern, $replacement,$subject) digunakan untuk mengganti semua pattern yang sama yang ada didalam subject dengan replacement
// nb : preg_split($pattern,$subject) digunakan untuk memotong subject dengan pattern yang sama menjadi array