<?php
$first = [
  "last_name" => "Fahmi",
  "first_name" => "Yusril"
];
$last = [
  "first_name" => "Yusril",
  "last_name" => "Fahmi"
];

$full = $first + $last;
var_dump($full);
var_dump($first==$last);
var_dump($first===$last);