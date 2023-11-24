<?php
  $result = 0;

  for($i=1; $i <= 100; $i = $i+2) {
    echo $i . "\n";
    $result += $i;
  }
  echo "la suma de los numeros pareas de 0 a 100 es: " . $result;
?>