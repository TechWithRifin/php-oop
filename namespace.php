<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// membuat object dengan class yang ada di dalam namespace
$conflict1 = new Data\One\Conflict();
// Data\One adalah nama namespace
// Conflict adalah nama Class

$conflict2 = new Data\Two\Conflict();
// Data\Two adalah nama namespace
// Conflict adalah nama Class

var_dump($conflict1);
var_dump($conflict2);
// implementasi ada di file conflict.php
// nb : untuk mengakses class yang ada di dalam namespace, mula mula kita harus menulis nama namespacenya terlebih dahulu disertai nama class di akhirnya
// nb : format mengakses class yang ada didalam namespace : namaNamespace\namaClass

echo Helper\APPLICATION . PHP_EOL;
// helper adalah nama namespace
// APPLICATION adalah nama constant


Helper\helpMe();
// helper adalah nama namespace
// helpMe adalah nama function

// implementasi ada di file helper.php
// nb : mirip seperti mengakses class yang ada di dalam namespace, untuk mengakses function dan constant yang ada di dalam namespace diawali dengan nama namespacenya