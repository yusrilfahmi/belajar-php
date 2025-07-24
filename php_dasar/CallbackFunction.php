<?php

function sayHello(string $name, callable $filter) {
  $finalName = call_user_func($filter, $name);
  echo "$finalName" . PHP_EOL;
}
sayHello("Eko", "strtoupper");
sayHello("Eko", "strtolower");
sayHello("Eko", function (string $name): string {
  return strtoupper($name);
}); // anonymous function

sayHello("Eko", fn (string $name): string => strtoupper($name)); // arrow function