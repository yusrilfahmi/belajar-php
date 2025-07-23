<?php
$nilai = "D";
switch ($nilai) {
  case 'A':
  case 'B':
    echo "Selamat Anda Lulus dengan Baik";
    break;
  case 'C':
    echo "Selamat Anda Lulus namun Perlu Peningkatan";
    break;
  default:
    echo "Maaf Anda Tidak Lulus";
}