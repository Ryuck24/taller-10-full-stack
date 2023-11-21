<?php
  const TICKET_PRICE = 25000;
  $personNumber = 0;
  $memberShip = "";

  echo "Ingresa el numero de personas a ingresar:";
  $personNumber = readline();

  echo "Ingresa el tipo de membresia: ";
  $memberShip= readline();

  $resultDis = $personNumber * TICKET_PRICE;

  if (strtoupper($memberShip) == "A") {
    $resultDis = $resultDis * 0.3;
  } else if (strtoupper($memberShip) == "B") {
    $resultDis = $resultDis * 0.3;
  }
  
  echo "El total a pagar es $" . number_format($resultDis);
?>