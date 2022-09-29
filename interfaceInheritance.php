<?php

require_once "data/Car2.php";

use Data\{Avanza};

$avanza = new Avanza();

$avanza->drive();

echo "jumlah ban : {$avanza->getTire()}".PHP_EOL;
echo "Brand : {$avanza->getBrand()}".PHP_EOL;
echo "masih dalam perawatan : {$avanza->isMaintenance()}".PHP_EOL;