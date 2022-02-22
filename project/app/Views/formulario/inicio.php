<?php

?>
<body style="background-color:#3ED1DB;">

<h2 class="titulo">Registro usuarios</h2>


<form method="post" action="registrar_estudiantes.php" class="formulario" style="background-color:white;">
	
	<label class="label"> Nombre: </label> <input type="text" class="input" name="nombre" id="nombre" required>
	<br/>
	<label class="label">Apellidos: </label> <input type="text" class="input" name="apellido" id="apellido" required>
	<br/>
	<label class="label">Numero de empelado o control: </label> <input type="text" class="input" name="no_control_empleado" id="no_control_empleado" required>
	<br/>
	<label class="label">Carrera o programa educativo: </label> <input type="text" class="input" name="carrera_programa" id="carrera_programa" required>
	<br/>
	<label class="label">Fecha de ingreso al ITESG: </label> <input type="date" class="input" name="fecha_ingreso" id="fecha_ingreso" required>
	<br/>
	
	<label class="label">Numero celular: </label> <input type="text" class="input" name="numero" id="numero" required>

			</select>
	<br><br>
	<button class="submit" style="background-color:#A82E1E;">Guardar</button>
</form>
	<img class="imagen" src="itesg.jfif" align="left">