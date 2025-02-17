<?php
//funcion para limpiar datos recibidos caracteres inecesarios
function limpiarcampo($data) {
    // Quitamos los espacios, tanto en el principio como en el final
    $data = trim($data);
    // Quitamos las barras invertidas \
    $data = stripslashes($data);
    // Convierte caracteres especiales a HTML por ejemplo "<" a "&lt;", sirve para prevenir ataques de inyección de código
    $data = htmlspecialchars($data);
    return $data;
    }

//Esta funcion valida solo letras
function validarSoloLetras($cadena) {
    return filter_var($cadena, FILTER_VALIDATE_REGEXP, [
        "options" => ["regexp" => "/^[a-zA-Z]+$/"]
    ]) !== false;
}

//funcion para validar fecha
function validar_fecha($fecha){
    //valida una fecha de tipo aaaa/mm/dd
    $arr_fecha = explode('-',$fecha);
    $anio = (int)$arr_fecha[0];
    $mes = (int)$arr_fecha[1];
    $dia = (int)$arr_fecha[2];

    if(count($arr_fecha) == 3 && checkdate($mes, $dia, $anio)){
		return  true;
    }
	    return false;
}

?>