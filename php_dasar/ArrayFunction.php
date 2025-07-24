<?php
$data = [
  1,2,3,4,5,6,7,8,9,10
];
var_dump(array_sum($data));// menghitung total dari array
var_dump(array_product($data)); // menghitung perkalian dari array
var_dump(array_rand($data)); // mengambil angka random dari array
var_dump(array_rand($data, 3)); // mengambil angka random dari array sebanyak 3
var_dump(array_map("strtoupper", ["eko", "yusril", "fahmi"]));
$mapFunction = array_map(fn(int $value) => $value * 2, $data);
var_dump($mapFunction);
rsort($data); // mengurutkan array secara descending
var_dump($data);
sort($data); // mengurutkan array secara ascending
var_dump($data);
var_dump(array_keys($data)); // mengambil key dari array
var_dump(array_values($data)); // mengambil value dari array