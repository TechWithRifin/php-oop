<?php

namespace Data\One{
    class Conflict
    {

    }
    class Sample
    {

    }
    class Dummy
    {
        
    }
}

namespace Data\Two{
    class Conflict
    {
        
    }
}

// nb : jika ingin membuat 2 namespace di file yang sama setiap namespace harus ada kurung kurawalnya ({})
// nb : saat kita membuat aplikasi, bisa dipastikan kita akan membuat banyak sekali class dan jika class terlalu banyak, kadang akan menyulitkan kita untuk mencari atau mengklasifikasikan jenis - jenis class
// nb : php memiliki fitur namespace, dimana kita bisa menyimpan class-class di dalam namespace tersebut
// nb : cara kerja namespace mirip seperti folder
// nb : namespace bisa nested (namespace di dalam namespace). dan jika kita ingin mengakses suatu class yang terdapat di dalam namespace, kita perlu menyebut nama namespacenya terlebih dahulu.
// nb : namespace biasanya digunakan ketika kita memiliki beberapa class dengan nama yang sama, dengan menggunakan namespace nama class yang sama tidak akan eror asalkan tiap class memiliki namespace yang berbeda

// nb : untuk membuat namespace, kita bisa menggunakan kata kunci namespace
// nb : jika kita ingin membuat sub namespace, kita cukup gunakan karakter \ setelah namespace sebelumnya