<div class="container is-fluid mb-6">
    <h1 class="title">Fecha</h1>
    <h2 class="subtitle">Lista de fechas</h2>
</div>

<div class="container pb-6 pt-6">  
    <?php
        require_once "./php/main.php";

        # Eliminar fecha #
        if(isset($_GET['date_id_del'])){
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
        $url="index.php?vista=date_list&page=";
        $registros=15;
        $busqueda="";

        # Paginador fecha #
        require_once "./php/fecha_lista.php";
    ?>
</div>