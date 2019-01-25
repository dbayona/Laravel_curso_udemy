<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>
		.active{
			text-decoration: none;
			color: green;
		}
		.error{
			color: red;
			font-size: 12;
		}
	</style>
	<title>Mi sitio</title>
</head>
<body>
	<header>
		<!-- Función para resaltar el menu activo -->
		<?php function activeMenu($url)
		{
			return request()->is($url) ? 'active' : '';
		}?>

		<h1> {{request()->is('/') ? 'Estás en el home' : 'No estás en el home'}} </h1>
		<nav>
			<!--//=============== SIN BLADE =================
			<a href="<?php echo route('home') ?>">Inicio</a>
			<a href="<?php echo route('saludos', 'Daniel') ?>">Saludo</a>
			<a href="<?php echo route('contactos') ?>">Contactos</a>-->

			<!--//=============== CON BLADE =================-->
			<a class="{{activeMenu('/')}}" href="{{route('home')}}">Inicio</a>
			<a class="{{activeMenu('saludos/*')}}" href="{{route('saludos', 'Daniel')}}">Saludo</a>
			<a class="{{activeMenu('contactame')}}" href="{{route('contactos')}}">Contactos</a>
		</nav>
	</header>

	@yield('contenido')

	<footer>Copyright {{date('Y')}}</footer>

</body>
</html>
