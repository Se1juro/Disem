<?php
	require('conexion2.php');
	
	$query="SELECT id, empresa, nit, encargado, telefono, email FROM empresas";
	
	$resultado=$mysqli->query($query);
	
?>
<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/hola.css">
		<link href='https://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet'>
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="index2.js"></script>
			<title>DISEM</title>
	</head>
	<script type="text/javascript" lenguage="javascript">
	function printDiv(divID){
		var divElements = document.getElementById(divID).innerHTML;

		var oldpage = document.body.innerHTML;

		document.body.innerHTML =

		"<html><head><title></tittle></head><body>" +
		divElements + "</body>";

		window.print();

		document.body.innerHTML = oldpage;
	}

	</script>
	
	<body>
	<?php
			session_start();
			
			if (isset($_SESSION["u_usuario"])) {
				
				
				
			}
			else{
				header("location: admin.php");
				
			}
		?>
		<div id="contenido">
			<header>
				<hgroup>
					<img src="imagenes/logo.png" width = "80"><h1>DISEM - Diseños Morales</h1>
				</hgroup>
				<nav>
				<ul>
					<li><a href="opciones.php">Inicio </a></li>
					<li><a href="empresasa.php">Empresas </a></li>
					<li><a href="cerrar_sesiona.php">Cerrar Sesion </a></li>
				</ul>
			</nav>
			</header>
			<section>
				<div id="textopr">
					<hgroup>
						<center><h1>Empresas</h1></center>
						<center><table border="1" width="100%">
			<thead>
				<tr>
					<td><center><b>NOMBRE</b></td></center>
					<td><center><b>NIT</b></td></center>
					<td><center><b>ENCARGADO</b></td></center>
					<td><center><b>TELEFONO</b></td></center>
					<td><center><b>EMAIL</b></td></center>
					<td><center><b>ELIMINAR</b></td></center>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td >
								<center><?php echo $row['empresa'];?></center>
							</td>
							<td>
								<center><?php echo $row['nit'];?></center>
							</td>
							<td>
								<center><?php echo $row['encargado'];?></center>
							</td>
							<td>
								<center><?php echo $row['telefono'];?></center>
							</td>
							<td>
								<center><?php echo $row['email'];?></center>
							</td>
							<td>
								<center><a href="eliminare.php?id=<?php echo $row['id'];?>">Eliminar</a></center>
							</td>
						</tr>
						
					<?php } ?>
				</tbody>
			</table><p>
			</center>
					<center><a href="empresasa.php">Atras</a></p></center>
					<form> 
					<center><input type='button' onclick='window.print();' value='Imprimir' /></center>
					</form> <p></p>
					<center><a href="editarea.php">Editar Empresa</a></p></center>
					</hgroup>
				</div>
			</section>
		</div>
		<footer>
			
		</footer>
	</body>
</html>
