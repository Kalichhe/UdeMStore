<?php
    # Eliminar usuario #
    if(isset($_GET['data_id_del'])){
        require_once "./php/fecha_eliminar.php";
    }

    if(!isset($_GET['page'])){
        $pagina=1;
    }else{
        $pagina=(int) $_GET['page'];
        if($pagina<=1){
            $pagina=1;
        }
    }

    $pagina=limpiar_cadena($pagina);

    # Paginador usuario #
    require_once "./php/fecha_lista.php";
 
?>