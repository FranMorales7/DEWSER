<?php
    $preguntas = [
        ['pregunta'=>'¿Quuién es el autor de "Mata Mua"?', 'respuesta' => 'Paul Gaugauin'],
        ['pregunta'=>'¿A qué cónsul romano se le atribuye la frase: "Veni, vidi, vici"?', 'respuesta' => 'Julio César'],
        ['pregunta'=>'Dime el autor de la trágica obra "Bodas de sangre"', 'respuesta' => 'Federico García Lorca'],
        ['pregunta'=>'¿Cuál es la capital de Portugal?', 'respuesta' => 'Lisboa']
    ];

    $aciertos=isset($_POST["acierto"]) ? (int)$_POST["acierto"]:0;

    $actual = isset($_POST['aux']) ? (int)$_POST['aux'] : 0;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        $actual++;
    }

    //Capturamos las respuestas del usuario y la correcta
    $respuestaCorrecta = (string)$_POST['respuestaCorrecta'];
    $respuestaUser = (string)$_POST['respuestaUser'];
    
    // echo "***".$respuestaCorrecta."***<br>";
    // echo "-->".$respuestaUser."<---";

    //Si existe una respuesta del usuario
    if(isset($respuestaUser)) {
        //Si coinciden con la respuesta correcta
        if($respuestaUser === $respuestaCorrecta){
            $aciertos++; //se sumara un punto
        } else{
            //Si no coinciden se resetean
            $respuestaCorrecta = '';
            $respuestaUser = '';
        }
        
    } 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario</title>
</head>
<body>
    <form action="ejercicio6.php" method="POST">
        <label for="respuestaUser"> <?php echo "".$preguntas[$actual]['pregunta'].""; ?> </label><br> <br>
        <input type="text" name="respuestaUser" id="respuestaUser"> <br>
        <input type="hidden" name="aux" value= '<?php echo $actual ?>' > <br>
        <input type="hidden" name="acierto" value= '<?php echo $aciertos ?>' > <br>
        <input type="hidden" name="respuestaCorrecta" value="<?php echo (string)$preguntas[$actual]['respuesta'] ?>" >
        <input type="submit" value="Siguiente">
    </form>

    <div>
        <p>Respuestas acertadas: </p>
        <?php
            if($actual>3){
                echo "".$aciertos."";
            }
        ?>
    </div>
</body>
</html>