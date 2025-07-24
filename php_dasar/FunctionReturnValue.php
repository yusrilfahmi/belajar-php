<?php
function sum(int $a, int $b) {
  return $a + $b;
}
$total = sum(80, 10);
var_dump($total);

function getFinalValue(int $total): string {
  if($total > 80) {
    return "A";
  }else if($total > 70) {
    return "B";
  }else {
    return "C";
  }
}

$nilaiKamu = getFinalValue($total);
var_dump($nilaiKamu);