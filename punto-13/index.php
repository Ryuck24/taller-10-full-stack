<?php
  $numberArray = array(1,2,3,4,5,6);
  $sum = 0;

  print_r($numberArray);
  
  foreach ($numberArray as $numberArray) {
    $sum += $numberArray;
  }
  echo "La suma del arreglo es :" . $sum;
?>