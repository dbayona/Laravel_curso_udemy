@extends('layout')

@section('contenido')
<h1>Saludos a {{$nombre}}</h1>

<ul>
	@forelse($consolas as $consola)
		<li>{{$consola}}</li>
	@empty
		<p>No hay consolas :(</p>
	@endforelse
</ul>

@stop

<!--<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Saludo</title>
</head>
<body>-->
	<!--<h1>Saludos para <?php echo $nombre; ?></h1>-->
	<!--<h1>Saludos para {{$nombre}} </h1>-->
		<!--{!!$html!!}
		{!!$script!!}-->
	<!--<ul>
		@foreach($consolas as $consola)
			<li>{{$consola}}</li>
		@endforeach-->

		<!--@forelse($consolas as $consola)
			<li>{{$consola}}</li>
		@empty
			<p>No hay consolas :(</p>
		@endforelse
	</ul>

	@if(count($consolas)===1)
		<p>Solo tienes una consolas</p>
	@elseif(count($consolas) > 1)
		<p>Tienes varias consolas</p>
	@else
		<p>No tienes ninguna consola</p>
	@endif-->
		
	<!--<header>
		<nav>
			<a href="<?php echo route('home') ?>">Inicio</a>
			<a href="<?php echo route('saludos', 'Daniel') ?>">Saludo</a>
			<a href="<?php echo route('contactos') ?>">Contacto</a>
		</nav>
	</header>
</body>
</html>-->