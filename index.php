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
    <link rel="stylesheet" href="css/inicio.css"> <!--estilo solo del index-->
</head>
<body>
    
<!-- mensaje de inicio en JS -->
<!-- <script src="msj_inicio/msj_inicio.js"></script> -->

<header> <!--barra de menu-->
    <?php echo $header;?>
</header>


<div class="foto_texto"> 
    <h1 class="titulo_foto_texto">Drama Queen Nails</h1>
</div>

<h2 class="titulo_abajo_foto_texto">¡Nuestros Servicios!</h2>
    <div class="inicio_servicios">

        <div >
            <a href="servicios.php"><h3 class="servicios_titulos">Semi-Permanente</h3></a>
            <a href="servicios.php"><img src="img/inicio/servicio_manicura.jpg" alt="" class="img_servicios"></a>
        </div>

        <div >
            <a href="servicios.php"><h3 class="servicios_titulos">Soft Gel</h3></a>
            <a href="servicios.php"><img src="img/inicio/img_servicios_cuticulas.jpg" alt="" class="img_servicios"></a>
        </div>

        <div>
            <a href="servicios.php"><h3 class="servicios_titulos">Retirado de Producto</h3></a>
            <a href="servicios.php"><img src="img/inicio/servicios_softgel.jpg" alt="" class="img_servicios"></a>
        </div>

    </div>


    <div class="block">
        <ul class="list">
            <li>Encontrarás la mejor atención.</li>
            <li>Trabajamos con destacados productos.</li>
            <li>Excelencia y responsabilidad a la hora de trabajar.</li>
        </ul>
    </div>


    <main class="main">
        <section class="main_section">
            <a href="trabajos.php"><h3 class="main_titulos">Respecto a mi Trabajo</h3></a>
            <p class="main_texto">Mi trabajo  va mucho más allá de simplemente pintar uñas, combino mis conocimientos y creatividad para hacer mi trabajo de la mejor manera, este pasatiempo me permite combinar mi amor por el arte con mi deseo de ayudar a las personas a sentirse bien consigo mismas.</p>
            <p class="main_texto">Cada diseño que creo es único y está inspirado en la personalidad y los gustos de la persona que está frente a mí. Me encanta el desafío de transformar una idea en una obra de arte en miniatura. Ya sea un diseño minimalista y elegante o algo más atrevido y colorido, me esfuerzo por capturar la visión de mis clientes y superar sus expectativas.</p>
        </section>

        <aside class="main_aside">
            <a href="contacto.php"><h3 class="main_titulos">Sobre Mí</h3></a>
            <p class="main_texto">Me presento mi nombre es Julieta Belen tengo 25 años y veo a esto como un pasatiempo hermoso. A lo largo de los años, he desarrollado una variedad de habilidades y conocimientos que me permiten ofrecer a mis clientes el mejor servicio posible. </p>
        </aside>
    </main>

<footer>
    <?php echo $footer;?>
</footer>

</body>
</html>