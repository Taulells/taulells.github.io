<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="lib/css/bootstrap.min.css">
	<title>Subir Imagen</title>
</head>
<?php
	/*Incluyendo la conexion y enviando el Arreglo Files a la funcion*/
	include 'MOST.coneccion.php';
	if(isset($_POST['save']))
	{
		$DBImagen->uploadImage($_FILES); 
	}
?>
<body style="padding-top:80px;">
	<div class="container col-lg-6 col-lg-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading" style="background-color:#81BEF7;">
				<div class="panel-title">
					<center><h3>Guardar Imagen con PHP</h3></center>
				</div>
			</div>
			<div class="panel-body">
				<form method="post" enctype="multipart/form-data">
				<div>
				<input name="price" placeholder="Price">
				</div>
				<div>
				<input name="name" placeholder="Name of the ph">
				</div>
					<div class="form-group">
						<input type="file" name="imagen">	
					</div>
					<input type="submit" name="save" class="btn btn-primary">
				</form>
				<br>
				<table class="table">
					<tr>
						<th>#</th>
						<th>Imagen</th>
					</tr>
					<?php 
					/*Llamando a la función para visualizar las imagenes*/
					$DBImagen->viewImages();
					?>
				</table>
			</div>
		</div>
	</div>



</body>
</html>
