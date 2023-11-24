<?php
  function opearacionArit($operacionOp) {
    switch ($operacionOp) {
      case 1:
        echo "Ingrese el primer numero: ";
        $numberOne = readline();
        echo "Ingrese el segundo numero: ";
        $numberTwo = readline();
        $result = $numberOne + $numberTwo;
        break;
      case 2:
        echo "Ingrese el primer numero: ";
        $numberOne = readline();
        echo "Ingrese el segundo numero: ";
        $numberTwo = readline();
        $result = $numberOne - $numberTwo;
        break;
      case 3:
        echo "Ingrese el primer numero: ";
        $numberOne = readline();
        echo "Ingrese el segundo numero: ";
        $numberTwo = readline();
        $result = $numberOne * $numberTwo;
        break;
      case 4:
        echo "Ingrese el primer numero: ";
        $numberOne = readline();
        echo "Ingrese el segundo numero: ";
        $numberTwo = readline();
        $result = $numberOne / $numberTwo;
        break;
    }
    echo "el resultado de la operacion es: " . $result;
  }
?>