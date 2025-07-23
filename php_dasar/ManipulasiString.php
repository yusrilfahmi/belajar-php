<?php
$name = "Yusril Fahmi";

echo "Name : " . $name . PHP_EOL;
echo "Umur : " . 20 . PHP_EOL;

$valueString = (string) 20;
var_dump($valueString);

$valueInt = (int) "20";
var_dump($valueInt);

$valueFloat = (float) "20.5";
var_dump($valueFloat);

$nama_lengkap =  "Yusril Fahmi";
echo $nama_lengkap[0] . PHP_EOL;
echo $nama_lengkap[3] . PHP_EOL;

echo "Nama saya $nama_lengkap" . PHP_EOL;
echo "Nama saya {$nama_lengkap}s" . PHP_EOL;