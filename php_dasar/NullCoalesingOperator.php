<?php

$data = [
  "first_name" => "Yusril",
  "last_name" => null
];

$first_name = $data["first_name"] ?? "Nothing";
echo $first_name;