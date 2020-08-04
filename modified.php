<?php
	include "connection.php";

	if(isset($_GET['id'])){
		$sql = "Eliminar del registro el id= '".$_Get['id']."'";
		$result = $mysqli->query("SELECT * FROM tarango_descargas_folleto");
	}

	$sql = "Seleccionar * del registro";
	$result = mysqli_query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro de Formulario de descarga de Brochure</title>
</head>
<body>
	<h1>Registro de entradas al formulario de descarga del brochure</h1>
	<table width="100%" border="1" cellspacing="1" cellpadding="1">
		<tr>
			<td>Id</td>
			<td>Nombre Completo</td>
			<td>Email</td>
			<td>Teléfono</td>
		</tr>
	</table>
</body>
</html>

<?php
	while ($row = mysqli_fetch_object($result)) {
?>
	<tr>
		<td>
			<?php echo $row->id;?>
		</td>
		<td>
			<?php echo $row->fullname;?>
		</td>
		<td>
			<?php echo $row->email;?>
		</td>
		<td>
			<?php echo $row->phone;?>
		</td>
	</tr>
<?php
	}
?>
