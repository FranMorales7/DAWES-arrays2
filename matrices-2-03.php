<?php
/**
 * matrices-2-03.php
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
   Diccionario mulitlingüe

    Fran Morales
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
<?php
  $titulo = [
    "inglés" => "Multilingual dictionary",
    "francés" => "Dictionnaire multilingue",
    "italiano" => "Dizionario multilingue",
    "portugués" => "Dicionário multilíngue"
  ];

  $idiomas = ["inglés", "francés", "italiano", "portugués"];
  $idioma_Azar = $idiomas[mt_rand(0, 3)];
  $titulo_Idioma = $titulo[$idioma_Azar];  
  printf("<h1><b>%s</b></h1> <br/>", $titulo_Idioma);
  
  $palabras = ["Lunes", "Botella", "Familia", "Pizarra", "Papelera"];
  $final = [
    "Lunes" => ["inglés" => "<b>monday</b> in spanish.", "francés" => "<b>lundi</b> en espagnol.", "italiano" => "<b>Lunedì</b> in spagnolo", "portugués" => "<b>Segunda-feira</b> em espanhol"],
    "Botella" => ["inglés" => "<b>bottle</b> in spanish.", "francés" => "<b>Bouteille</b> en espagnol.", "italiano" => "<b>Bottiglia</b> in spagnolo", "portugués" => "<b>Garrafa</b> em espanhol"],
    "Familia" => ["inglés" => "<b>family</b> in spanish.", "francés" => "<b>Famille</b> en espagnol.", "italiano" => "<b>Famiglia</b> in spagnolo", "portugués" => "<b>Família</b> em espanhol"],
    "Pizarra" => ["inglés" => "<b>blackboard</b> in spanish.", "francés" => "<b>Tableau noir</b> en espagnol.", "italiano" => "<b>Lavagna</b> in spagnolo", "portugués" => "<b>Quadro</b> <b>negro</b> em espanhol"],
    "Papelera" => ["inglés" => "<b>trash</b> in spanish.", "francés" => "<b>Poubelle</b> en espagnol.", "italiano" => "<b>Spazzatura</b> in spagnolo", "portugués" => "<b>Lixo</b> em espanhol"]
  ];

  $palabra_Azar = $palabras[mt_rand(0,4)];

  printf ("<b>%s</b> significa %s", $palabra_Azar, $final[$palabra_Azar][$idioma_Azar] );
?>

  <footer>
    <p>Fran Morales</p>
  </footer>
</body>
</html>
