<?php

	/*== Almacenando datos ==*/
    $date_id_del=limpiar_cadena($_GET['date_id_del']);

    /*== Verificando usuario ==*/
    $check_fecha=conexion();
    $check_fecha=$check_fecha->query("SELECT fecha_id FROM fecha WHERE fecha_id='$date_id_del'");
    
    if($check_fecha->rowCount()==1){
    		
	    $eliminar_fecha=conexion();
	    $eliminar_fecha=$eliminar_fecha->prepare("DELETE FROM fecha WHERE fecha_id=:id");

	    $eliminar_fecha->execute([":id"=>$date_id_del]);

	    if($eliminar_fecha->rowCount()==1){
		    echo '
		        <div class="notification is-info is-light">
		            <strong>¡FECHA ELIMINADA!</strong><br>
		            Las fechas se eliminaron con exito
		        </div>
		    ';
		}else{
		    echo '
		        <div class="notification is-danger is-light">
		            <strong>¡Ocurrio un error inesperado!</strong><br>
		            No se pudo eliminar la fecha, por favor intente nuevamente
		        </div>
		    ';
		}
		$eliminar_fecha=null;
    	
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                LA FECHA que intenta eliminar no existe
            </div>
        ';
    }
    $check_usuario=null;