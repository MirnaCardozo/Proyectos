<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Números pares</title>
  </head>
  <body>
    <p>Números del 1 al 100 que sean par.</p>

    <?php

$i=1;
while ($i <= 100) {


if (($i%2)==0) {



echo "Números pares: $i</br>";


}
$i++;
}

     ?>


  </body>
</html>
