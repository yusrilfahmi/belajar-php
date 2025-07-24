<?php
$name = "Eko";
$otherName = &$name;

$otherName = "Yusril";
echo $name . PHP_EOL;

function increment(int &$value) {
  $value++;
}

$number = 1;
increment($number);
echo $number . PHP_EOL;