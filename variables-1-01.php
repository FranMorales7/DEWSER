<?php
/**
 * Variables. Sin formularios.(1) 1 - variables-1.php
 *
 * @author Fran Morales
 *
 */
  $num = random_int(10,1000);

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Línea.
    Variables. Sin formularios.
    Fran Morales
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios-basicos.css" title="Color">
</head>

<body>
  <h1>Línea</h1>

  <p>Actualice la página para mostrar una nueva línea.</p>

<?php

print "  <p class=\"aviso\">Ejercicio incompleto</p>\n";

?>
  <svg width="250" height="200" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
  <line x1="10" y1="10" x2=$num y2="10" stroke="black" stroke-width="3"/>

</svg>

  <footer>
    <p>Fran Morales</p>
  </footer>
</body>
</html>
