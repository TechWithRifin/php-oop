<?php

class Student {
    public string $id;
    public string $name;
    public int $value;
    private string $sample;
    private string $importantData;

    public function setSample(string $sample):void{
        $this->sample = $sample;
    }

    public function setImportantData(string $importantData):void{
        $this->importantData = $importantData;
    }

    public function __clone(){
        // menghapus property $importantData dari hasil cloningnya 
        unset($this->importantData);
    }

    // magic function __toString()
    public function __toString():string{
        return "Student id:$this->id, name:$this->name, value:$this->value";
    }

    // magic function __invoke()
    public function __invoke(...$arguments):void{
        $join = join(",", $arguments);
        echo "Invoke student with arguments $join".PHP_EOL;
    }

    // magic function __debugInfo()
    public function __debugInfo():array{
        return[
            "id"=> $this->id,
            "name"=>$this->name,
            "value"=>$this->value,
            "sample"=>$this->sample,
            "importantData"=>$this->importantData,
            "author"=>"arifin",
            "version"=> "1.0.0"
        ];
    }
}

// penjelasan

// function __clone()

// nb : kadang menyalin semua properties bukanlah yang kita inginkan
// nb : misal saja kita hanya ingin menyalin beberapa properties saja, tidak ingin semuanya (misal hanya ingin menyalin 3 property dari 5 property)
// nb : jika kita ingin memodifikasi cara PHP melakukan clone, kita bisa membuat function di dalam classnya dengan nama function __clone()
// nb : function __clone akan di panggil di object hasil duplikasi setelah proses duplikasi selesai
// jadi jika kita ingin menghapus beberapa properties, bisa kita lakukan di dalam function __clone()
// nb : function __clone berfungsi untuk memodifikasi hasil dari clonenya
// nb : $student1 => clone $student2 => $student2->__clone()
// nb : penjelasan = $student2 menyalin semua properties student1 lalu setelah selesai function __clone akan di panggil secara otomatis

// function __toString()

// nb : __toString function merupakan salah satu magic function yang digunakan sebagai representasi string sebuah object
// nb : jika misal kita ingin membuat string dari object kita, kita bisa membuat function __toString()
// nb : misal ketika kita melakukakn konversi object $student1 menjadi string, maka secara otomatis function __toString() yang akan dieksekusi

// function __invoke()
// __invoke() function merupakan function yang dieksekusi ketika object yang kita buat dianggap sebagai function
// misal ketika kita membuat object $student1, lalu kita melakukan $student1(), maka secara otomatis function __invoke() yang akan di eksekusi

// function __debugInfo()
// nb : sebelumnya kita sering melakukan debug object menggunakan function var_dump()
// nb : jika kita ingin mengubah isi default dari debug info, kita bisa membuat function __debugInfo() di classnya
// nb : dengan membuat function __debugInfo(), ketika kita melakukan var_dump() pada object, maka secara otomatis function __debugInfo() akan dieksekusi