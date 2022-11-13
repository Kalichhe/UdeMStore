<?php
	require_once "./php/main.php";
	$tabla="";

	if(isset($busqueda) && $busqueda!=""){
		$consulta_datos="SELECT * FROM fecha WHERE fecha_id ORDER BY fecha_id DESC LIMIT 1;";
	}else{
		$consulta_datos="SELECT * FROM fecha WHERE fecha_id ORDER BY fecha_dia DESC LIMIT 1";
	}

	$conexion = conexion();

	$fechas = $conexion->query($consulta_datos);
	$fechas = $fechas->fetchAll();

	$total = $conexion->query($consulta_datos);
	$total = (int) $total->fetchColumn();

	$tabla.='
	<div class="table-container">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr class="has-text-centered">
                    <th>Dia</th>
                    <th>Mes</th>
                    <th>Año</th>
                </tr>
            </thead>
            <tbody>
	';

	if($total>=1){
		
		foreach($fechas as $rows){
			$tabla.='
			<tr class="has-text-centered" >
			<td>'.$rows['fecha_dia'].'</td>
			<td>'.$rows['fecha_mes'].'</td>
			<td>'.$rows['fecha_ano'].'</td>
			</tr>
			';
		}
	}else{
		if($total<1){
			$tabla.='
				<tr class="has-text-centered" >
					<td colspan="7">
						No hay registros en el sistema
					</td>
				</tr>
			';
		}
	}

	$tabla.='</tbody></table></div>';

	$conexion = null;
	echo $tabla;
?>