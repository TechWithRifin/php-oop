<?php

namespace Data;

abstract class Location
{
    public string $name;
}

class City extends Location
{

}

class Province extends Location
{

}

class Country extends Location
{
    
}

// nb : saat kita membuat class, kita bisa menjadikannya sebagai abstract class.
// nb : abstract class artinya, class tersebut tidak bisa dibuat sebagai object secara langsung, hanya bisa diturunkan
// nb : untuk membuat sebuah class menjadi abstract, kita bisa menggunakan kata kunci abstract sebelum kata kunci class
// nb : biasanya abstract class digunakan sebagai kontrak child class
// nb : child class turunan dari abstract class bisa dibuat sebagai object.(asalkan child class tersebuat bukan abstract class juga)