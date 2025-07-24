<?php
function factorial($angka): int {
  if ($angka == 1) {
    return 1;
  } else {
    return $angka * factorial($angka - 1);
  }
}

function loop(int $angka) {
  if($angka == 0) {
    echo "Loop Berhenti" . PHP_EOL;
  } else {
    echo "Loop Berjalan $angka" . PHP_EOL;
    loop($angka - 1);
  }
}

echo factorial(5);
var_dump(loop(5));