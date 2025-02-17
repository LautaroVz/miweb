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
    <link rel="stylesheet" href="css/trabajos.css">
</head>
<body>
    
    <header> <!--barra de menu-->
        <?php echo $header;?>
    </header>

    <div class="foto_texto"> <!-- aca tuve un problema, el cual es que el css no me reconoce los valores que le doy y deja al div pegado a la izquierda-->
        <h1 class="titulo_foto_texto">¡Mis Trabajos!</h1>
        <p class="subtitulo_foto_texto">La realización de mi trabajo no solo se basa en la técnica y el </p>
        <p class="subtitulo_foto_texto" > conocimiento, sino también en la pasión y el amor por lo que hago.</p>
        
    </div>

    <h2 class="titulo_abajo_foto_texto">ㅤ</h2>

<!-- en esta pestaña use cajas flex  -->
    <div class="trabajos_content">

        <div class="columna">
            <img src="img/trabajos/1.jpg" alt=""  class="content_img_trabajos"> 
            <img src="img/trabajos/3.jpg" alt="" class="content_img_trabajos">
            <img src="img/trabajos/4.jpg" alt="" class="content_img_trabajos">
            <img src="img/trabajos/2.jpg" alt="" class="content_img_trabajos"> 
        </div>

        <div class="columna">
            <img src="img/trabajos/5.jpg" alt="" class="content_img_trabajos">
            <img src="img/trabajos/6.jpg" alt="" class="content_img_trabajos">
            <img src="img/trabajos/7.jpg" alt="" class="content_img_trabajos">
            <img src="img/trabajos/8.jpg" alt="" class="content_img_trabajos">
        </div>

        <div class="columna"> 
            <img src="img/trabajos/9.jpg" alt="" class="content_img_trabajos">
            <img src="img/trabajos/10.jpg" alt="" class="content_img_trabajos">
            <img src="img/trabajos/11.jpg" alt="" class="content_img_trabajos">
            <img src="img/trabajos/12.jpg" alt="" class="content_img_trabajos">
        </div>

    </div>
  
    <footer> 
        <?php echo $footer;?>
    </footer>

</body>
</html>