<?php
  const TICKET_PRICE = 25000;
  $personNumber = 0;
  $memberShip = "";

  echo "Bienvenido a la Bolera (A caballo regalado no le mires el dentado.) \n";
  echo "Ingresa tu membresia (A, B, C , D) \n";

  echo "Ingresa el numero de personas a ingresar:";
  $personNumber = readline();

  echo "Ingresa el tipo de membresia: ";
  $memberShip= readline();

  $result = $personNumber * TICKET_PRICE;

  switch($memberShip) {
    case "A":
    echo "Tu descuento es de con membresia A (30%) es: $" . number_format($result * 0.7);
    break;
    case "B":
    echo "Tu descuento es de con membresia B (25%) es: $" . number_format($result * 0.75);
    break;
    case "C":
    echo "Tu descuento es de con membresia C (10%) es: $" . number_format($result * 0.9);
    break;
    case "D":
    echo "Tu descuento es de con membresia D (5%) es: $" . number_format($result * 0.95);
    break;
    default:
    echo "Su tipo de afiliación no tiene descuento, Total a pagar: $" . number_format($totalPay);
  }
?>