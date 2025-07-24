<?php

function sayHello(string $name, int $age = 20): string{
  return "Hello $name, you are $age years old" . PHP_EOL;
}