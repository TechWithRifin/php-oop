<?php 

namespace Helper;

function helpMe()
{
    echo "HELP ME " . PHP_EOL;
}

function sayHello()
{
    echo "HELLO WORLD" . PHP_EOL;
}

const APPLICATION = "Belajar PHP OOP";
const NAME = "arifin";

// nb : jika hanya ada 1 namespace di dalam 1 file maka tidak perlu adanya kurung kurawal ({})
// nb : selain class, kita juga dapat menggunakan namespace pada function dan constant
// nb : dan jika kita ingin menggunakan function dan constant tersebut, kita bisa menggunakannya dengan diawali dengan nama namespacenya (mirip seperti mengakses class pada namespace)