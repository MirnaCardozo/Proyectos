<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Suma de números impares</title>
  </head>
  <body>
    <p>Algoritmo que imprima la suma de los números impares</p>
    <?php

$i=1;
$suma=0;
while ($i <= 100) {

if ($i % 2 ==1) {
$suma=$suma+$i;



}
$i++;
}
echo " La suma de los números impares  es : $suma</br>";

    ?>





  </body>
</html>
