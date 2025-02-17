<?php
include_once("compartida/content.php")
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drama Queen Nails</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/estructura.css">
    <link rel="stylesheet" href="css/contacto.css"> <!--estilo solo la pestaña contacto-->
    
</head>

<body>
    
    <header> <!--barra de menu-->
        <?php echo $header;?>
    </header>

    <main class="main">
        <h2 class="titulo_content">Formulario de inscripción</h2>
        <p class="titulo_content"><span class="obligatorio" >(*)</span> = El campo es obligatorio</p>
        
        <form class="formulario" method="post" action="validacion/contacto_receptor.php">
            
            <div class="box_campo">
                <label><h3 class="titulo_forms"><span class="obligatorio">(*)</span> Nombre:</h3> </label>
                <input class="campo" name="nombre" type="text" minlength="3" maxlength="30" pattern="[a-zA-Z]+" required  placeholder="Ingrese su Nombre completo" />
            </div>
           
            <div class="box_campo">
                <label><h3 class="titulo_forms"><span class="obligatorio">(*)</span> Apellido:</h3></label>
                <input class="campo" type="text"  name="apellido" minlength="5" maxlength="30" pattern="[a-zA-Z]+" required placeholder="Ingrese su Apellido" />
            </div>
            
            <div class="box_campo">
                <label><h3 class="titulo_forms"><span class="obligatorio">(*)</span> Email:</h3></label>
                <input class="campo" type="email" name="email" maxlength="60" required placeholder="Ingrese su email" />
            </div>
            
            <div class="box_campo">
                <label><h3 class="titulo_forms">Dni:</h3></label>
                <input class="campo" type="number" name="dni" min="4000000"  placeholder="Ingrese su dni solo con números"/>
            </div>
            
            <div class="box_campo">
                <label><h3 class="titulo_forms">Fecha de Nacimiento:</h3></label>
                <input type="date" name="fechanac" required>   
            </div>

            <div class="box_campo">
                <label><h3 class="titulo_forms"> Dejanos un Mensaje!:</h3></label>
                <textarea class="campo" name="mensaje" minlength="1" ></textarea>
            </div>

            <div class="box_campo">
                <input class="campo" type="submit" value="Enviar" />
            </div>

        </form>
    </main>
    
    <footer> 
        <?php echo $footer;?>
    </footer>
</body>
</html>