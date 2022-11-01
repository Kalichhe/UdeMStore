<div class="container is-fluid mb-6">
	<h1 class="title">Fechas</h1>
	<h2 class="subtitle">Ultima Actualización</h2>
</div>

<div class="container pb-6 pt-6">
	<?php
		require_once "./php/main.php"; 
	?>

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php/fecha.php" method="POST" class="FormularioAjax" autocomplete="off" >
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Día</label>
				  	<input class="input" type="text" name="fecha_dia" pattern="[a-zA-Z- ]{1,70}" maxlength="70" placeholder="Día en letras" required >
				</div>
		  	</div>
			<div class="column">
		    	<div class="control">
					<label>Mes</label>
				  	<input class="input" type="text" name="fecha_mes" pattern="[a-zA-Z- ]{1,70}" maxlength="70" placeholder="Mes en letra" required >
				</div>
		  	</div>
			<div class="column">
		    	<div class="control">
					<label>Año</label>
				  	<input class="input" type="text" name="fecha_ano" pattern="[0-9- ]{1,70}" maxlength="70" required placeholder="Año en número">
				</div>
		  	</div>
		</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-info is-rounded" >Guardar</button>
		</p>
		<!-- <button>fecha</button> -->
	</form>
</div>