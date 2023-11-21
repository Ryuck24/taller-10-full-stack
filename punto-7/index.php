<?php
  $operacionOp = 0;
  $numberOne = 0;
  $numberTwo = 0;

  echo "Digite La operacion de acuerdo a: \n";
  echo "1. Sumar \n";
  echo "2. Restar \n";
  echo "3. Multiplicar \n";
  echo "4. Dividir \n";
  echo "5. Salir \n";
  echo "ingrece la opcion:";

  $operacionOp = readline();

  switch($operacionOp) {
    case 1:
    echo "A seleccionado la opcion suma \n";
    echo "Ingrese el primer numero: ";
    $numberOne = readline();
    echo "Ingrese el segundo numero: ";
    $numberTwo = readline();
    $result = $numberOne + $numberTwo;
    break;
    case 2:
    echo "A seleccionado la opcion resta \n";
    echo "Ingrese el primer numero: ";
    $numberOne = readline();
    echo "Ingrese el segundo numero: ";
    $numberTwo = readline();
    $result = $numberOne - $numberTwo;
    break;
    case 3:
    echo "A seleccionado la opcion Multiplicacion \n";
    echo "Ingrese el primer numero: ";
    $numberOne = readline();
    echo "Ingrese el segundo numero: ";
    $numberTwo = readline();
    $result = $numberOne * $numberTwo;
      break;
    case 4:
    echo "A seleccionado la opcion resta \n";
    echo "Ingrese el primer numero: ";
    $numberOne = readline();
    echo "Ingrese el segundo numero: ";
    $numberTwo = readline();
    $result = $numberOne + $numberTwo;
    break;
    case 5:
    echo "A seleccionado la opcion Divición \n";
    echo "Ingrese el primer numero: ";
    $numberOne = readline();
    echo "Ingrese el segundo numero: ";
    $numberTwo = readline();
    $result = $numberOne / $numberTwo;
    break;
  }
  echo "el resultado de la operacion es: " . $result;
?>