<?php
session_start();
include_once("funciones.php");  
include_once("../compartida/content.php")
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drama Queen Nails</title>
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/estructura.css">
    <link rel="stylesheet" href="../css/mensaje_formulario.css">

</head>
<body>
    <header> 
        <?php echo $header_msj;?>
    </header>
 

    <div class ="content_recibido"> <!--content principal-->
    <h1 class ="titulo_datos_recibidos">Error en los datos enviados!!!</h1>
        <p> <h4 class ="dato_session"><?php echo $_SESSION["valor"];?></h4></p>

        <a class ="bottom_volver" href="../contacto.php">Volver a Realizar Formulario</a>
        <a class ="bottom_volver" href="../index.php">Volver al Inicio</a>

    </div>



    <footer> 
        <?php echo $footer_msj;?>
    </footer>
</body>
</html>