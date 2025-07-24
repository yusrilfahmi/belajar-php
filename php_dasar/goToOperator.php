<?php

goto a;
echo "Selamat Datang A" . PHP_EOL;

a:
echo "Selamat Belajar B" . PHP_EOL;

$counter = 1;

while (true) {
  echo "Ini adalah perulangan $counter" . PHP_EOL;
  $counter++;

  if ($counter > 10) {
    goto end;
  }
}

end:
echo "End Loop";