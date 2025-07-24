<?php

function increment(){
  static $count = 0; //static scope
  $count++; //local scope
  echo $count . PHP_EOL;
}

increment();
increment();