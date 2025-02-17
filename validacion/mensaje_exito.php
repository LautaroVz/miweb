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
    <h1 class ="titulo_datos_recibidos">Datos recibidos con exito!!!</h1>
        <p>Nombre recibido: <h4 class ="dato_session"><?php echo $_SESSION["nombre"];?></h4></p>
        <p>Apellido recibido: <h4 class ="dato_session"><?php echo $_SESSION["apellido"];?></h4></p>
        <p>Email recibido: <h4 class ="dato_session"><?php echo $_SESSION["email"];?></h4></p>
        <p>DNI recibido: <h4 class ="dato_session"><?php echo $_SESSION["dni"];?></h4></p>
        <p>fecha recibido: <h4 class ="dato_session"><?php echo $_SESSION["fechanac"];?></h4></p>
        <p>Mensaje recibido: <h4 class ="dato_session"><?php echo $_SESSION["mensaje"];?></h4></p>

        <p class ="titulo_cerrar_pagina">Ya podes cerrar esta pagina</p>
        <a class ="bottom_volver" href="../index.php">Volver al Inicio</a>
        <a class ="bottom_volver" href="../contacto.php">Volver a Realizar Formulario</a>
    </div>

    <footer> 
        <?php echo $footer_msj;?> 
    </footer>
</body>
</html>