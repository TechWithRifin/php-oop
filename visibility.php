<?php

require_once "data/Product.php";

$product = new Product();

// $product->name = 'kursi'; -> error karena property name bersifat private
// $product->stock = 12; -> error karena property stock bersifat protected
$product->description = 'aku adalah kursi';

echo $product->description.PHP_EOL; //berhasil karena property description bersifat public atau var

echo $product->getName('kursi').PHP_EOL;

?>