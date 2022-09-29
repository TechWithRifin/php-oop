<?php

namespace Data;

interface HasBrand {
    function getBrand(): string;
}

interface IsMaintenance{
    function isMaintenance(): bool;
}

// interface inheritance interface
interface Car extends HasBrand {
    function getTire(): int;
    function drive(): void;
}

// multiple implement interface
class Avanza implements Car, IsMaintenance {
    public function drive(): void {
        echo "Drive Avanza" . PHP_EOL;
    }
    public function getTire(): int {
        return 4;
    }
    public function getBrand(): string {
        return "toyota";
    }
    public function isMaintenance(): bool{
        return true;
    }
}


// nb : pada interface sebuah child class bisa impelement lebih dari 1 interface
// nb : bahkan interface pun bisa implement interface lain dan bisa lebih dari 1 interface.
// nb : namun jika interface ingin mewarisi interface lain, kita menggunakan kata kunci extends, bukan implements
// contoh : jika kita ingin interface inheritance interface lain lebih dari satu
// interface Car extends HasBrand{}