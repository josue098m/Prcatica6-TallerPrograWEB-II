<!DOCTYPE html>
<html>
<head>
	<title>Registros</title>
</head>
<body>
	<div class="container">
		<h1>Registros actual ingresado</h1>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Usuario</th>
					<th>Contraseña</th>
				</tr>
			</thead>
			<tbody>
				
				<tr>
					<td><?php echo $usuario['nombre']; ?></td>
					<td><?php echo $usuario['apellido']; ?></td>
					<td><?php echo $usuario['nempleado']; ?></td>
				</tr>
			</tbody>
		</table>
		<form method="POST" action="<?php echo base_url(); ?> /FControler/buscar">
			<input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
			<button type="submit">Actualizar datos</button>
		</form>
	</div>
</body>
</html>