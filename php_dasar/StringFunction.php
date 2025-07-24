<?php
var_dump(strlen("Eko")); // menghitung panjang string
var_dump(join("-", ["Eko", "Yusril", "Fahmi"])); // menggabungkan string
var_dump(explode("-", "Eko-Yusril-Fahmi")); // memecah string
var_dump(trim("  Eko  ")); // menghapus spasi di awal dan akhir
echo strtolower("EKO"); // mengubah string menjadi huruf kecil
echo strtoupper("eko"); // mengubah string menjadi huruf besar
echo ucfirst("eko"); // mengubah huruf pertama menjadi huruf besar
echo lcfirst("EKO"); // mengubah huruf pertama menjadi huruf kecil
echo ucwords("eko"); // mengubah huruf pertama setiap kata menjadi huruf besar
echo str_replace("Eko", "Yusril", "Eko"); // mengganti kata

echo strpos("Eko", "k"); // mencari posisi karakter
echo strrpos("Eko", "k"); // mencari posisi karakter terakhir

echo substr("Ekooo", 1, 3); // mengambil substring
