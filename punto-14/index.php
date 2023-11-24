<?php
  include "./passwordCheck.php";

  $user = "";
  $pass = "";

  echo "Bienvenido a funeraria lopez 
  donde nosotros se la enterramos a usted \n";
  echo "por favor valida tus credenciales: \n";

  echo "Digite una usuario: ";
  $user = readline();
  echo "Digite una contraseña: ";
  $pass = readline();

  if (hasSecuritylong($pass)) {
    if (hasUpperLetter($pass)) {
      if (hasNumber($pass)) {
        echo "Usuario y contraseña validos \n";
      } else {
        echo "su contraseña no contiene un numero como minimo \n";
      }
    } else {
      echo "su contraseña no contiene una letra mayuscula \n";
    }
  } else {
    echo "Su contraseña no cumple con la longitud segura \n";
  }
?>