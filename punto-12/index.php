<?php
 // En la foto del readme no aparece este cambio ya que no me la toma completa la foto
 // pero es lo mismo solo que no se repite el codigo al generar una tabla de Multiplicar
  $continue = true;

do{

  $number = 0;

  echo "Digite el numero a mostrar en tabla de multiplicar: ";
  $number = readline();

  for($i = 0; $i <= 30; $i++){
    $result = $number * $i;
    echo $number . " x " . $i . " = " . $result . "\n";
  }
}while($continue)
?>