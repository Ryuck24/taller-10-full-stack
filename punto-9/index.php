<?php
  $number = 0;
  $i = 0;
  echo "Digite el numero a multiplicar:";
  $number = readline();

  while ($i <= 30) {
    $result = $number * $i;
    echo $number . " x " . $i . " = " . $result . "\n";
    $i++;
  }
?>