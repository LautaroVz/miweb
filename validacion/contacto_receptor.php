<?php
session_start();
include_once("funciones.php");


//inicio de recepcion de datos
if (!empty ($_POST)){

    $nombre = "";
    if (isset ($_POST ["nombre"])){
        $nombre =(string) limpiarcampo($_POST ["nombre"]);
    }
    
    $apellido = "";
    if (isset ($_POST ["apellido"])){
        $apellido =(string) limpiarcampo($_POST ["apellido"]);
    }
    
    
    $email = "";
    if (isset ($_POST ["email"])){
        $email =(string) limpiarcampo($_POST ["email"]);
    }
    
    $dni = "";
    if (isset ($_POST ["dni"])){
        $dni =(int) limpiarcampo($_POST ["dni"]);
    }
 
    $fechanac = ""; 
    if(isset($_POST["fechanac"])){
        $fechanac = (string) limpiarCampo($_POST["fechanac"]);
    }

    $mensaje = "";
    if (isset ($_POST ["mensaje"])){
        $mensaje =(string) limpiarcampo($_POST ["mensaje"]);
    }

    
}  
else{
    echo"<h1>no me llegaron datos del formulario</h1>";
    }
//fin de la recepcion de datos


//validacion de datos
$no_error = true;
$msjerror = "";

if ($nombre == "" || strlen ($nombre)  > 30 || strlen ($nombre)  < 3 || (!validarSoloLetras($nombre))){
    $no_error = false;
    $msjerror.= "<p>Error en el Nombre</p>";
    
}

if ($apellido == "" || strlen ($apellido)  < 5 || strlen ($apellido)  > 30 || (!validarSoloLetras($apellido))){
    $no_error = false;
    $msjerror.= "<p>Error en el Apellido</p>";
}

if ( !filter_var ($email, FILTER_VALIDATE_EMAIL) || $email == "" || strlen ($email)  > 60 ){
    $no_error = false;
    $msjerror.= "<p>Error en el Email</p>";
}

if ($dni == "" || $dni < 4000000 ){
    $no_error = false;
    $msjerror.= "<p>Error en el DNI</p>";
}

if($fechanac == "" || !validar_fecha($fechanac) ){
    $no_error = false;
    $msjerror.= "<p>Error en Fecha de Nacimiento</p>";
}

if ($mensaje == "" || strlen ($mensaje)  < 1 ){
    $no_error = false;
    $msjerror.= "<p>Error en Mensaje</p>";
}

//fin de la validacion de datos

//muestra de datos en pantalla
if ($no_error){

    $_SESSION["nombre"] = $nombre;
    $_SESSION["apellido"] = $apellido;
    $_SESSION["email"] = $email;
    $_SESSION["dni"] = $dni;
    $_SESSION["fechanac"] = $fechanac;
    $_SESSION["mensaje"] = $mensaje;

    header("location:mensaje_exito.php");
}
else {
    $_SESSION["valor"] = $msjerror;
/*/    $_SESSION["apellido"] = $msjerror;
    $_SESSION["email"] = $msjerror;
    $_SESSION["dni"] = $msjerror;
    $_SESSION["fechanac"] = $msjerror;
    $_SESSION["mensaje"] = $msjerror;*/

    header("location:mensaje_error.php");
}





?>
