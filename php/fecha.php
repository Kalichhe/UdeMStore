<?php

    require_once "main.php";

    /*== Almacenando datos ==*/
    $dia=limpiar_cadena($_POST['fecha_dia']);
    $mes=limpiar_cadena($_POST['fecha_mes']);
    $ano=limpiar_cadena($_POST['fecha_ano']);


    /*== Verificando campos obligatorios ==*/
    if($dia=="" || $mes=="" || $ano==""){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No has llenado todos los campos que son obligatorios
            </div>
        ';
        exit();
    }

    /*== Verificando integridad de los datos ==*/
    if(verificar_datos("[0-9-]{1,70}",$dia)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El DIA no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z- ]{1,70}",$mes)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El MES no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[0-9- ]{1,70}",$ano)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El AÑO no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    /*== Guardando datos ==*/
    $guardar_fecha=conexion();
    $guardar_fecha=$guardar_fecha->prepare("INSERT INTO fecha(fecha_dia,fecha_mes,fecha_ano) VALUES(:dia,:mes,:ano)");

    $marcadores=[
        ":dia"=>$dia,
        ":mes"=>$mes,
        ":ano"=>$ano
    ];

    $guardar_fecha->execute($marcadores);

    if($guardar_fecha->rowCount()==1){
        echo '
            <div class="notification is-info is-light">
                <strong>FECHA REGISTRADO!</strong><br>
                La fecha se registro con exito
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo registrar la fecha, por favor intente nuevamente
            </div>
        ';
    }
    $guardar_fecha=null;