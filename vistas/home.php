	<div class="container is-fluid">
		<h1 class="title">Principal</h1>
		<h2 class="subtitle">¡Bienvenido <?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?>!</h2>
		<br>
		<h1 class="title">Ultima modificación</h1>
		<h2 class="subtitle">La ultima modificación fue <?php ?></h2>
	</div>
<?php	
	require_once "./php/ultima_fecha.php";
 ?>