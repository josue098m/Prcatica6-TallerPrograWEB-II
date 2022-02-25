<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Inicio</title>

        <link rel="stylesheet" href="index.css">
</head>

<body style="background-color:#3ED1DB;">
	
	<header id="main-header">
		
		<a id="logo-header" href="#">
			<span class="site-name">Compras en linea</span>
			<span class="site-desc">Tienda / Practica Final</span>
		</a> <!-- / #logo-header -->

		<nav>
			<ul>
				<li><a href="menu.php">Inicio</a></li>
				<li><a href="login.php">Productos</a></li>
			</ul>
		</nav><!-- / nav -->

	</header><!-- / #main-header -->

	
	<section id="main-content">
	
		
	
				
			
			<div class="content">
				<article>
				<h1 class="titulos">Tienda en linea</h1>
				<h2 >¿Quienes somos?</h2>
				<p>Tienda en linea es una empresa multinacional con sede en Mexico dedicada al comercio electrónico en el mundo. Fundada en el año 2022, cuenta con operaciones en Argentina, Bolivia, Brasil, Chile, Colombia, Costa Rica, Ecuador, El Salvador, Guatemala, Honduras, México, Nicaragua, Panamá, Paraguay, Perú, República Dominicana, Uruguay y Venezuela.2​
 </p>
            </article>
			<article>
				<h2>Resumen</h2>
				<p>Los usuarios pueden vender y comprar tanto productos nuevos como usados a un precio fijo o variable, además de que se ofrecen servicios privados. Tienda en linea también posee un servicio llamado MercadoPago, una plataforma de cobro a los compradores y pagos y abonos a los vendedores.</p>
            </article>
			</div>
			
		 <!-- /article -->
	
	</section> <!-- / #main-content -->

	
	
	<footer id="main-footer">
		<p>&copy; 2014 <a href="http://franciscoamk.com">FranciscoAMK.com</a></p>
	</footer> <!-- / #main-footer -->

	
</body>
<style type="text/css">

body {
	margin: 0;
	padding: 0;
	font-family: Helvetica, Arial, sans-serif;
	color: #666;
	background: #f2f2f2; 
	font-size: 1em;
	line-height: 1.5em;
}

h1 {
	font-size: 2.3em;
	line-height: 1.3em;
	margin: 15px 0;
	text-align: center;
	font-weight: 300;
}

p {
	margin: 0 0 1.5em 0;
}

img {
	max-width: 100%;
	height: auto;
}
#main-header {
	background: #333;
	color: white;
	height: 80px;
}	
	#main-header a {
		color: white;
	}

/*
 * Logo
 */
#logo-header {
	float: left;
	padding: 15px 0 0 20px;
	text-decoration: none;
}
	#logo-header:hover {
		color: #0b76a6;
	}
	
	#logo-header .site-name {
		display: block;
		font-weight: 700;
		font-size: 1.2em;
	}
	
	#logo-header .site-desc {
		display: block;
		font-weight: 300;
		font-size: 0.8em;
		color: #999;
	}
	

/*
 * Navegación
 */
nav {
	float: right;
}
	nav ul {
		margin: 0;
		padding: 0;
		list-style: none;
		padding-right: 20px;
	}
	
		nav ul li {
			display: inline-block;
			line-height: 80px;
		}
			
			nav ul li a {
				display: block;
				padding: 0 10px;
				text-decoration: none;
			}
			
				nav ul li a:hover {
					background: #0b76a6;
				}

#main-content {
	background: white;
	width: 90%;
	max-width: 800px;
	text-align: justify;
	padding:20px;
	flex:1 1 70%;
	margin: 30px auto;
	box-shadow: 0 0 30px rgba(0,0,0,.1);
}

	#main-content header,
	#main-content .content {
		padding: 30px;
	}

	.content article{
	margin-bottom: 20px;
	padding-bottom:20px;
	border-bottom:1px solid #000;
}
    .content article:nth-last-child(1){
	margin-bottom: 0;
	padding-bottom: 0;
	border-bottom:none;
}

#main-footer {
	background: #333;
	color: white;
	text-align: center;
	padding: 20px;
	margin-top: 40px;
}
	#main-footer p {
		margin: 0;
	}
	
	#main-footer a {
		color: white;
	}

	.titulos{
font-family: fantasy;
color: #1E56A8;
	}



	</style>

</html>