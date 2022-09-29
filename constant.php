<?php

require_once 'data/Person.php';

// tidak seperti property, dalam constant nilai dari variabel tidak dapat diubah
// dalam mengakses suatu constant kita harus menggunakan format NamaClass::NamaConstant
echo Person::AUTHOR . PHP_EOL;
echo Person::VERSION . PHP_EOL;

// deklarasi constant ada di class Person
?>