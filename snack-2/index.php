<?php
// echo "A $color $fruit";
// echo '<br>';
//

// echo "A $color $fruit";
// echo "<br>";
// $aluto = saluta(' Pippo');
// echo $aluto;
// $nomi = ['Pippo', 'Papo', 'Topo'];
// stampa_nomi($nomi);
//
$nome = $_GET['name'];
// nome in get
$email = $_GET['email'];
// email in get
$age = $_GET['età'];

include 'vars.php';

$ver = verify($name, $email, $age);

// $name = strlen($nome);
// echo $name;
// // verifico lunghezza nome
// if ($name <= 3) {
// echo "il dato non è corretto";
// } else {
//   echo "il dsto è corretto";
// }
//
//
//
// echo $email;
//
// $pos_punto = strpos($email, '.');
// // verifico presenza di almeno un punto
// $pos_chiocciola = strpos($email, '@');
// // verifico presenza della chiocciola
// echo $pos_punto;
// echo $pos_chiocciola;
// if ($pos_punto !== false && $pos_chiocciola !== false ) {
//       $email = ok;
//       echo "l'email è corretta";
//
// }   else {
//       $email = ko;
//       echo "l'email non è corretta";
// }
// // se punto e chiocciola sono true email è corretta
//
//
// $sage = intval($age);
// if (!is_numeric ($age)) {
//   echo "l'età non è un numero";
// } else {
//   echo "l'età è corretta";
// }

 ?>
