
<body style="background-color:white;">

<h2 class="titulo">Registro compra</h2>

	<form method="POST" action="./FControler/insertar" class="formulario" style="background-color:white;">

	
	<label class="label" for="nombre"> Nombre: </label>
	<input type="text" class="input" name="nombre" id="nombre" required>
	<br/>
	<label class="label" for="apellidos">Apellidos: </label> 
	<input type="text" class="input" name="apellidos" id="apellidos" required>
	<br/>
	<label class="label" for="nempleado">Numero de cliente: </label> 
	<input type="text" class="input" name="nempleado" id="nempleado" required>
	<br/>
	<label class="label" for="producto">Producto: </label> 
	<input type="text" class="input" name="producto" id="producto" required>
	<br/>
	<label class="label" for="direccion">Direccion: </label> 
	<input type="text" class="input" name="direccion" id="direccion" required>
	<br/>
	<label class="label" for="numero">Numero celular: </label> 
	<input type="text" class="input" name="numero" id="numero" required>

		
	<br><br>
	<button class="submit" style="background-color:#A82E1E;">Guardar</button>
</form>
	



	<style type="text/css">
 .formulario{
width: 500px;
position: center;
color: #3ED1DB;
color-rendering: #3ED1DB;
left: 200px;
margin: auto;
margin-top: 40px;
padding: 25px;
box-shadow: 0 0 10px;
}
.titulo{
color: #1E56A8;
text-align: center;
font-size: 30px;
font-family: fantasy;
}
.input, .label, .submit{
display: black;
width:100%;
font-size: 1em;
border-radius: 60px,
}
.input{
padding: 10px;
font-size: 20px;
border: 1px solid rgba(0,0,0,.3);
margin-bottom: 10px;
background: rgba(0,0,0,.2);
}
.input:focus + .label{
margin-top: -160;
}
.submit{
background-color: #A82E1E;
border: none; 
border-radius: 25px;
color: white;
padding: 20px;
cursor: pointer;
}
.label{
padding: 15px;
font-family: fantasy;
color: #505F75;
}

</style>