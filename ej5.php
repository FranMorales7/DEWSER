<?php
$dia = rand(1,7); //genera un numero aleatorio entre 1 y 7

switch ($dia){
    case 1: echo "Día 1: Lunes"; break;
    case 2: echo "Día 2: Martes"; break;
    case 3: echo "Día 3: Miércoles"; break;
    case 4: echo "Día 4: Jueves"; break;
    case 5: echo "Día 5: Viernes"; break;
    case 6: echo "Día 6: Sábado"; break;
    case 7: echo "Día 7: Domingo"; break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        switch ($dia){
            case 1: echo "Día 1: Lunes"; break;
            case 2: echo "Día 2: Martes"; break;
            case 3: echo "Día 3: Miércoles"; break;
            case 4: echo "Día 4: Jueves"; break;
            case 5: echo "Día 5: Viernes"; break;
            case 6: echo "Día 6: Sábado"; break;
            case 7: echo "Día 7: Domingo"; break;
        }
    ?>
</body>
</html>