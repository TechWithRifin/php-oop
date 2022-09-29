<?php

namespace Data;

interface Car{
    function drive(): void;
    function getTire(): int;
}

class Avanza implements Car {
    public function drive(): void {
        echo "Drive Avanza" . PHP_EOL;
    }
    public function getTire(): int {
        return 4;
    }
}


// nb : sebelumnya kita sudah tahu bahwa abstract class bisa kita gunakan sebagai kontrak untuk class childnya
// nb : namun sebenarnya yang lebih tepat untuk kontrak adalah interface
// nb : interface mirip seperti abstract class, yang membedakan adalah di interface, semua method(function) otomatis abstract, tidak memiliki block (body)
// nb : di interface kita tidak boleh memiliki properties, kita hanya boleh memiliki constant
// nb : untuk mewariskan interface, kita tidak menggunakan kata kunci extends, melainkan implements
// nb : berbeda dengan class, kita bisa implements lebih dari satu interface
// nb : semua function yang ada di interface (Car) harus di override di class childnya (Avanza)
// nb : interface juga bisa pakai untuk pholimorpism, konsep sama dengan pholimorpism pada class yaitu car sebagai parent dan avanza sebagai child
// nb : 1 class dapat berisi lebih dari 1 interface
// misal : class Avanza implement Car, Human
// nb : class yang sudah implement interface juga dapat extends parent class
// misal : class Avanza extends Manager implement Car