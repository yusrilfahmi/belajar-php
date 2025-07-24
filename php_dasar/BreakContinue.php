<?php
$counter  = 1;

while (true) {
  if ($counter == 5) {
    break;
  }
  echo $counter . PHP_EOL;
  $counter++;
}

for ($i=0; $i < 10; $i++) { 
  if ($i % 2 != 0) {
    continue;
  }
  echo $i . PHP_EOL;
}