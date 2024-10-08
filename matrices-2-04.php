<?php
/**
 * matrices-2-04.php
 *
 * @author Fran Morales
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Elimina valores repetidos.

    Fran Morales
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios2.css" title="Color">
</head>

<body>
  <h1>Elimina valores repetidos</h1>

  <p>Actualice la página para mostrar un nuevo grupo de valores.</p>

<?php
  $rango = mt_rand(5,15);

  $bolas = [];

  for ($i = 0; $i < $rango; $i++) {
    $codigo = mt_rand(2,11);
    if ($codigo<10){
      $bolas[$i] = "&#1010$codigo";
    }else{
      $bolas[$i] = "&#101$codigo";
    };
  };

  print "<b>Entre estas $rango bolas ...</b> <br/>";
  foreach ($bolas as $item) {
    printf ("%s  ", $item);
  };

  $sin_repetir = array_unique($bolas);
  $max = count($sin_repetir);

  print "<br/> <b>... hay $max bolas distintas</b> <br/>";

  foreach ($sin_repetir as $item) {
    printf ("%s  ", $item);
  };
?>

  <footer>
    <p>Fran Morales</p>
  </footer>
</body>
</html>
