<?php

namespace Data;

class Shape
{
    public function getCorner()
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    // function overriding
    public function getCorner()
    {
        return 4;
    }

    public function getParentCorner()
    {
        // akses function getCorner yang ada di class Shape (parent)
        return parent::getCorner();
    }
}

// nb : kadang kita ingin mengakses function yang terdapat di class parent yang sudah terlanjur kita override di class child
// nb : untuk mengakses function milik class parent, kita bisa menggunakan keyword 'parent'
// nb : sederhananya keyword 'parent' digunakan untuk mengakses class parent
// nb : keyword parent hanya bisa digunakan di dalam class child saja