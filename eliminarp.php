<?php 
	
	require('conexion2.php');
	
	$id=$_GET['id'];
	
	$query="DELETE FROM productos WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/chao.css">
		<link href='https://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet'>
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="index2.js"></script>
			<title>Eliminar Producto</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h4>PRODUCTO ELIMINADO</h4>
				
				<?php 	}else{ ?>
				
				<h1>Error al eliminar Producto</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="miraria.php">Regresar</a>
			
		</center>
	</body>
</html>