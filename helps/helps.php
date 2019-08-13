<?php

//para que nos imprima el privilegio que sea
function getPrivilegio($p)
{
    $privilegio = "";
    switch ($p) {
        case 1:
            $privilegio = "Administrador";
            break;

        case 2:
            $privilegio = "Estudiante";
            break;
        case 3:
            $privilegio = "Profesor";
            break;
        default:
            $privilegio = "- No definido -";
            break;
    }

    return $privilegio;
}
//para que nos imprima el genero del usuario
function getGenero($g){
    $genero = "";
    switch ($g) {
        case 1:
            $genero = "Masculino";
            break;

        case 2:
            $genero = "Femenino";
            break;
       
        default:
            $genero = "- No definido -";
            break;
    }

    return $genero;
}
//para que nos imprima el estado
function getEstado($e){
    $estado = "";
    switch ($e) {
        case 0:
            $estado= "Desactivo";
            break;

        case 1:
            $estado = "Activo";
            break;
       
        default:
            $estado = "- No definido -";
            break;
    }

    return $estado;
}

//para que nos imprima el estado
function getTipopregunta($t){
    $tipo = "";
    switch ($t) {
        case 0:
            $tipo= "unica respuesta";
            break;

        case 1:
            $tipo = "pregunta abierta";
            break;
       
        default:
            $tipo = "- No definido -";
            break;
    }

    return $tipo;
}
