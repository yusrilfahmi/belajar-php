<?php
$name = "Eko"; //global scope
function sayHello() {
  global $name; //menggunakan variabel global
  $age = 10; //local scope
  echo "Hello $name, you are $age years old" . PHP_EOL;
};
sayHello();