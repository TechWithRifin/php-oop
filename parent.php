<?php

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL; //akan menampilkan value 0

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;//akan menampilkan value 4
echo $rectangle->getParentCorner() . PHP_EOL; //akan menampilkan value 0