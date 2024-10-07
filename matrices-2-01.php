<?php
/**
 * matrices-2-01.php
 *
 * @author Fran Morales
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Diccionario multilingüe.
    Fran Morales
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Diccionario multilingüe</h1>

  <p>Actualice la página para mostrar una nueva palabra.</p>

<?php
  $palabras = ["perro", "familia", "botella", "lunes", "boligrafo"];
  $traducciones = [
    "perro" => ["inglés" => "dog", "francés" => "chien", "italiano" => "cane", "portugués" => "cachorro"],
    "familia" => ["inglés" => "family", "francés" => "famille", "italiano" => "famiglia", "portugués" => "família"],
    "botella" => ["inglés" => "bottle", "francés" => "bouteille", "italiano" => "bottiglia", "portugués" => "garrafa"],
    "lunes" => ["inglés" => "monday", "francés" => "Lundi", "italiano" => "Lunedi", "portugués" => "Segunda-feira"],
    "boligrafo" => ["inglés" => "pen", "francés" => "stylo", "italiano" => "penna", "portugués" => "caneta"]
  ];

  $palabra_azar = $palabras[mt_rand(0,4)];
  $idiomas = ["inglés", "francés", "italiano", "portugués"];
  $idioma_azar = $idiomas[mt_rand(0,3)];
  $traduccion = $traducciones[$palabra_azar][$idioma_azar];

  print "<b>$traduccion</b> quiere decir <b>$palabra_azar</b> en $idioma_azar";
?>

  <footer>
    <p>Fran Morales</p>
  </footer>
</body>
</html>
