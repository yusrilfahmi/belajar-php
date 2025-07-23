<?php
$nilai = 75;
$absen = 75;

if ($nilai >= 80 && $absen >= 80) {
  echo "Nilai kamu A";
} else if ($nilai >= 70 && $absen >= 70) {
  echo "Nilai Kamu B";
}else {
  echo "Maaf Anda Tidak Lulus";
}

if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai kamu A";
  elseif ($nilai >= 70 && $absen >= 70) :
    echo "Nilai Kamu B";
  else :
    echo "Maaf Anda Tidak Lulus";
  endif;