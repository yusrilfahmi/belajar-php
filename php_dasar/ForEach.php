<?php
$names = [
  'Eko', 'Kurniawan', 'Khannedy'
];
for ($i = 0; $i < count($names); $i++) {
  echo $names[$i] . PHP_EOL;
}

foreach ($names as $name) {
  echo $name . PHP_EOL;
} // tidak butuh indeks

$person = [
  'name' => 'Yusril Fahmi',
  'age' => 20
];

foreach ($person as $key => $value) {
  echo $key . " : " . $value . PHP_EOL;
} // butuh indeks

foreach ($names as $index => $value) {
  echo "Data ke " . $index . " : " . $value . PHP_EOL;
}