<body style="background-color:white;">

<h2 class="titulo">Registro encontrado</h2>

	<form method="POST" action="./FControler/actualizar" class="formulario" style="background-color:white;">

	
	<label class="label" for="nombre"> Nombre: </label>
	<input type="text" class="input" name="nombre" id="nombre" value="<?php echo $nombre; ?>">
	<br/>
	<label class="label" for="apellidos">Apellidos: </label> 
	<input type="text" class="input" name="apellidos" id="apellidos" value="<?php echo $apellidos; ?>">
	<br/>
	<label class="label" for="nempleado">Numero de cliente: </label> 
	<input type="hidden" class="input" name="nempleado" id="nempleado" value="<?php echo $nempleado; ?>">
	<br/>
	<label class="label" for="producto">Producto: </label> 
	<input type="text" class="input" name="producto" id="producto" value="<?php echo $producto; ?>">
	<br/>
	<label class="label" for="direccion">Direccion: </label> 
	<input type="text" class="input" name="direccion" id="direccion" value="<?php echo $direccion; ?>">
	<br/>
	<label class="label" for="numero">Numero celular: </label> 
	<input type="text" class="input" name="numero" id="numero" value="<?php echo $numero; ?>">

		
	<br><br>
	<button class="submit" style="background-color:#A82E1E;">Actualizar</button>
</form>