<?php
//   $color = 'green';
//   $fruit = 'apple';
//
//
// function saluta($nome) {
//   $testo = "ciao $nome";
//   return $testo;
//  }
//
// function stampa_nomi($array){
//   foreach ($array as $nome) {
// echo $nome;  }
// }
//
$name = strlen($nome);
$pos_punto = strpos($email, '.');
$pos_chiocciola = strpos($email, '@');
$sage = intval($age);

function verify($name, $email, $age){
  if ($name > 3 && $pos_punto !== false && $pos_chiocciola !== false && is_numeric ($age)) {
    echo "access granted";
  } else {
    echo "access denied";
  }
}

 ?>
