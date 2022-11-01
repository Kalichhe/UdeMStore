<div class="container is-fluid mb-6">
    <h1 class="title">Fecha</h1>
    <h2 class="subtitle">Lista de fechas</h2>
</div>

<div class="container pb-6 pt-6">  
    <?php
        require_once "./php/main.php";

        $pagina=limpiar_cadena($pagina);
        $url="index.php?vista=last_date_list&page=";
        $registros=15;
        $busqueda="";

        # Paginador fecha #
        require_once "./php/ultima_fecha.php";
    ?>
</div>