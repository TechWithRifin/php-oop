<?php

function getGanjil(int $max):Iterator{
    for($i=1; $i<=$max; $i++){
        if($i % 2 == 1){
            // dengan menggunakan keyword yield maka otomatis variabel $i akan menjadi iterator
            yield $i;
        }
    }
}

foreach (getGanjil(100) as $value){
    echo "ganjil : $value".PHP_EOL;
}

// penjelasan 

// nb : sebelumnya kita tahu bahwa untuk object yang bisa di iterasi, kita menggunakan iterator
// nb : namun pembuatan iterator secara manual sangatlah ribet
// nb : untungnya di PHP, terdapat fitur generator, yang bisa kita gunakan untuk membuat iterator secara otomatis hanya dengan menggunakan kata kunci yield