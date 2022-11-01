<?php
	$tabla="";

	if(isset($busqueda) && $busqueda!=""){
		$consulta_datos="SELECT * FROM fecha WHERE fecha_id ORDER BY fecha_id DESC LIMIT 1;";
	}else{
		$consulta_datos="SELECT * FROM fecha WHERE fecha_id ORDER BY fecha_dia ASC LIMIT 1";
	}
	// $conexion = conexion();
	// // $mostrar_fechas = "SELECT * FROM fecha ORDER BY fecha_id DESC LIMIT 1;";
	// $datos = $conexion->query($consulta_datos);
	// $datos = $datos->fetchAll();

	$tabla.='
	<div class="table-container">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr class="has-text-centered">
                	<th>#</th>
                    <th>Dia</th>
                    <th>Mes</th>
                    <th>Año</th>
                </tr>
            </thead>
            <tbody>
	';
	$conexion = null;
	echo $tabla;
?>