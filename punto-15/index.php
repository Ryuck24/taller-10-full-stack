<?php
  include "./operationArit.php";

  $operacionOp = 0;

  echo "Digite La operacion de acuerdo a: \n";
  echo "1 -> Sumar \n";
  echo "2 -> Restar \n";
  echo "3 -> Multiplicar \n";
  echo "4 -> Dividir \n";
  echo "ingrece la opcion:";

  $operacionOp = readline();

  opearacionArit($operacionOp)
?>