<?php
/**
 * matrices-2-02.php
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
    Tirada multilingüe.

    Fran Morales
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
<?php
  $dado = mt_rand(1,6);
  $idiomas = ["inglés", "francés", "italiano", "portugués"];
  $traducciones = [
    1 => ["inglés" => "You got a <b>one</b>", "francés" => "Tu en as <b>un</b>", "italiano" => "Ne hai <b>uno</b>", "portugués" => "Você tem <b>um</b>"],
    2 => ["inglés" => "You got a <b>two</b>", "francés" => "Tu as un <b>deux</b>", "italiano" => "Hai un <b>due</b>", "portugués" => "Você tem <b>dois</b>"],
    3 => ["inglés" => "You got a <b>three</b>", "francés" => "Tu as un <b>trois</b>", "italiano" => "Hai un <b>tre</b>", "portugués" => "Você tem um <b>três</b>"],
    4 => ["inglés" => "You got a <b>four</b>", "francés" => "Tu as un <b>quatre</b>", "italiano" => "Hai un <b>quattro</b>", "portugués" => "Você tem <b>quatro</b>"],
    5 => ["inglés" => "You got a <b>five</b>", "francés" => "Tu as un <b>cinq</b>", "italiano" => "Hai un <b>cinque</b>", "portugués" => "Você tem <b>cinco</b>"],
    6 => ["inglés" => "You got a <b>six</b>", "francés" => "Tu as un <b>six</b>", "italiano" => "Hai un <b>sei</b>", "portugués" => "Você tem um <b>seis</b>"]
  ];

  $idioma = $idiomas[mt_rand(0,3)];
?>
<img src="img/<?php echo $dado ?>.svg" alt=""/>;
<br/> <br/> 
<?php
  print $traducciones[$dado][$idioma];
?>
  <footer>
    <p>Fran Morales</p>
  </footer>
</body>
</html>
