<?php
require "lib/MyFunction.php"; // error jika file tidak ditemukan
// include "lib/MyFunction.php"; // tetap dijalankan meskipun ada error
require_once "lib/MyFunction.php"; //

echo sayHello("Eko", 20) . PHP_EOL;