<?php
$number = array(1, 2, 3, 4, 5.5, "Mantap");
$nama = ["Yusril", "Fahmi", 0.5, "Fahmi", 1, "Fahmi", "Fahmi"];
echo $number[0];
var_dump($number);
$nama[0] = "Budi";
var_dump($nama[0]);
unset($nama[1]);
$nama[] = "Bagas";
var_dump($nama);
var_dump(count($nama)); 


$yusril = [
  "nama" => [
    "depan" => "Yusril",
    "belakang" => "Fahmi"
  ],
  "umur" => 20
];
var_dump($yusril["nama"]["depan"]);