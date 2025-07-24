<?php

$buat = true;

if ($buat) {
  function sayHello(string $name, $age = 20) {
    echo "Hello $name, umur kamu $age" . PHP_EOL;
  };
}
// function sayHello(){
//   echo "Hello";
// };

sayHello("Yusril", 18);
sayHello("Eko");
sayHello(10); //konversi otomatis
// sayHello([]); //error karena tidak dapat dikonversi ke string

function sumAll(array $numbers) {
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  echo "Total " . implode(",", $numbers) . " adalah $total" . PHP_EOL;
}
sumAll([1, 2, 3, 4, 5]);
///
function sumAll2(...$numbers) {
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  echo "Total " . implode(",", $numbers) . " adalah $total" . PHP_EOL;
}
sumAll2(1, 2, 3, 4, 5);
///
$values = [1, 2, 3, 4, 5];
sumAll2(...$values);
///