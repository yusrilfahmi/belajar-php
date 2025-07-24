<?php
$sayHello = function(string $name) : string {
  return "Hello $name";
};

echo $sayHello("Eko") . PHP_EOL;

function sayGoodBye(string $name, $filter): string{
  $finalName = $filter($name);
  return "Good Bye $finalName";
}

echo sayGoodBye("Eko", function(string $name):string {
   return strtoupper($name);
});

$filterFunction = function(string $name):string {
  return strtoupper($name);
};
sayGoodBye("Eko", $filterFunction);

$firstName = "Yusril";
$lastName = "Fahmi";

$fullName = function() use ($firstName, $lastName): string {
  return "$firstName $lastName";
};
echo $fullName() . PHP_EOL;