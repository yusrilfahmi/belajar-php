<?php
function foo() {
  echo "Foo" . PHP_EOL;
}

function bar() {
  echo "Bar" . PHP_EOL;
}

$functionName = "foo";
$functionName();
$functionName = "bar";
$functionName();

function sayHello(string $name, $filter) {
  $finalName = $filter($name);
  echo "$finalName" . PHP_EOL;
}

sayHello("Eko", "strtoupper");
sayHello("Eko", "strtolower");

function sampleFunction(string $name):string {
  return "Hello $name";
}

sayHello("Eko", "sampleFunction");