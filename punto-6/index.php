<?php
  $name = "";
  $years = 0;

  echo "Ingresa tu nombre: ";
  $name = readline();
  echo "Ingresa tu edad: ";
  $years = readline();

  if ( $years >= 18 ) {
    echo "Hola " . $name . " tienes " . $years . " años " . "Eres mayor de edad";
  }else if( $years < 18 ) {
    echo "lo sineto no eres mayor de edad (edad requerida 18 años en adelante)";
  }
?>