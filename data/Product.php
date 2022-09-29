<?php

class Product
{
    // private hanya bisa di akses oleh class itu sendiri
    private string $name;
    private int $price;

    // protected bisa di akses oleh class itu sendiri dan semua class turunannya(child)
    protected int $stock;
    
    // public atau var bisa di akses oleh class itu sendiri, semua class turunannya(child) dan dapat di akses dari luar (require_once)
    public string $description;

    public function getName(string $name)
    {
        return $this->name = $name;
    }
    protected function getPrice()
    {
        return $this->price;
    }
}

class ProductDummy extends Product
{
    public function info()
    {
        // echo "name $this->name".PHP_EOL; -> ERROR karena property name bersifat privat
        echo "stock $this->stock".PHP_EOL; // SUCCESS karena propery stock bersifat protected
        echo "stock $this->description".PHP_EOL; // SUCCESS karena propery description bersifat public
    }
}

// nb : visibility / access modifier adalah kemampuan untuk membatasi akses dari properties, function dan constat yang kita buat
// nb : secara default properties, function dan constant yang kita buat di dalam class bisa di akses dari mana saja atau dia adalah public
// nb : selain public, masih ada beberapa visibility lainya yaitu : protected dan private
// nb : keyword var untuk properties memiliki sifat yang sama dengan public