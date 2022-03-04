<!DOCTYPE html>
<html>
<head>
	<title>Registros</title>
</head>
<body>
	<div class="container">
		<h1>Registros actuales</h1>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Usuario</th>
					<th>Contraseña</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($compras as $usuario ) {
					# code...
				?>
				<tr>
					<td><?php echo $usuario['nombre']; ?></td>
					<td><?php echo $usuario['apellido']; ?></td>
					<td><?php echo $usuario['nempleado']; ?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>