<?php
  function hasSecuritylong($password) {
    return strlen($password) >= 8;
  }

  function hasUpperLetter($password) {
    //return preg_match('/[A-Z]/', $password);
    $arrayPass = str_split($password);
    foreach ($arrayPass as $letter) {
      if (ctype_upper($letter)) {
        return true;
      }
    }
  }

  function hasNumber($password) {
    $arrayPass = str_split($password);
    foreach ($arrayPass as $letter) {
      if (is_numeric($letter)) {
        return true;
      }
    }
  }
?>