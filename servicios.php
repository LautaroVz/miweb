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
    <link rel="stylesheet" href="css/servicios.css"> <!--estilo solo la pestaña servicios-->
    
</head>
<body>
    
<header> <!--barra de menu-->
    <?php echo $header;?>
</header>


<div class="foto_texto"> 
    <h1 class="titulo_servicios">Nuestros Servicios</h1>
    <p>El cuidado de las uñas hablan de la personalidad de cada mujer, en </p>
        <p>Drama Queen Nails. además lo convertimos en un momento único.</p>
</div>

<h2 class="titulo_abajo_foto_texto">ㅤ</h2>

<!--aca use tablas-->

<table class="tabla_servicios_content">
    <tr>
        <th> <h3 class="servicios_titulos">Semi-Permanente </h3></th>
    </tr>
    <tr> 
        <td> <p class="info_servicios" >Este método utiliza un esmalte especial que se cura bajo luz UV. Es ideal para quienes buscan mantener sus uñas con un aspecto fresco y brillante de larga duración, generalmente hasta dos semanas. </p></td>
        
    </tr>

</table>

<table class="tabla_servicios_content">
    <tr>
        <th> <h3 class="servicios_titulos">Soft Gel</h3></th>
    </tr>
    <tr> 
        <td> 
            <p class="info_servicios"> Combina flexibilidad y durabilidad para ofrecer uñas hermosas y naturales, permite una amplia variedad de diseños y colores, asegurando un modelo personalizado y elegante.
           Se aplica como un esmalte y se cura bajo luz UV</p>
        </td>
        
    </tr>
    
</table>

<table class="tabla_servicios_content">
    <tr>
        <th> <h3 class="servicios_titulos">Retirado de Producto</h3></th>
    </tr>
    <tr> 
        <td> <p class="info_servicios">Es un proceso crucial para mantener la salud y la belleza de las uñas. Realizarlo correctamente previene daños en la uña natural y garantiza una base limpia para futuras aplicaciones.</p></td>
        
    </tr>
</table>


<footer> 
    <?php echo $footer;?>
</footer>


</body>
</html>