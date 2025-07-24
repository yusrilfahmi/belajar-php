<?php
$firstName = "Yusril";
$lastName = "Fahmi";

$fullName = function() use ($firstName, $lastName): string {
  return "$firstName $lastName";
}; //anonymous function

$sayHelloYsr = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $sayHelloYsr();