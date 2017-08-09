<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Suma de números pares</title>
  </head>
  <body>
    <p>Algoritmo que imprima la suma de los numeros pares.</p>

    <?php

$i=1;
$suma=0;
while ($i <= 100) {

if ($i % 2 ==0) {
$suma=$suma+$i;



}
$i++;
}
echo "La suma de los números pares es : $suma</br>";

    ?>


  </body>
</html>
