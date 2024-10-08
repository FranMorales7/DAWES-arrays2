<?php
/**
 * matrices-2-05.php
 *
 * @author Fran Morales
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Busca emoticono.

    Fran Morales
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios2.css" title="Color">
</head>

<body>
  <h1>Busca emoticono</h1>

  <p>Actualice la página para mostrar un nuevo grupo de emoticonos.</p>

<?php
  $rango = mt_rand(10,20);
  $emoticonos = [];

  for ($i = 0; $i < $rango; $i++) {
    $codigo = mt_rand(12,80);
    $emoticonos[$i] = "&#1285$codigo";
  };

  print "<b>Hay $rango emoticonos ...</b> <br/>";
  foreach ($emoticonos as $item) {
    printf ("%s  ", $item);
  };

  $codigo_nuevo = mt_rand(12,80);
  $emoticono_azar = "&#1285$codigo_nuevo";

  print "<br/> <br/>";

  if (in_array($emoticono_azar, $emoticonos)) {
    printf ("El emoticono %s  está entre ellos ", $emoticono_azar);
  } else {
    printf ("El emoticono %s  NO está entre ellos ", $emoticono_azar);
  };


?>

  <footer>
    <p>Fran Morales</p>
  </footer>
</body>
</html>
