<?php
$a = 10;
$b = ++$a; //dinaikkan dulu baru diberi nilai

//sama dengan seperti ini
$a = $a + 1;
$b = $a;
///

$b = $a++; //diberi nilai terlebih dahulu baru dinaikkan

//sama dengan seperti ini
$b = $a;
$a = $a + 1;