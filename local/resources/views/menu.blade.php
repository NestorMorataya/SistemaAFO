<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo URL::asset('css/menu.css') ?>" type="text/css"> 		
</head>
<body>
	<header id="titulo">
		<div id="auth">
			@if (Auth::check())
			<p>{{{Auth::user()->nombre }}} {{{Auth::user()->apellido }}}&nbsp&nbsp <a href="{{url('logout')}}">(Cerrar Sesión)</a></p>
			@endif
		</div>
		<div id="subtitulo">
			<img src="<?php echo URL::asset('img/Odontologia.png') ?>">
			<h1>FACULTAD DE ODONTOLOGIA</h1>
			<h2>UNIVERSIDAD DE EL SALVADOR</h2>
		</div>
		<section class="menu">
			<div>
<<<<<<< HEAD

=======
>>>>>>> 5a6ffbbc076f7c182329fdbd1823e51d4994487f
		        <nav>
		            <ul>
		                <li><a href="{{url('ingreso')}}">Registro</a></li>
		                <li><a href="#">Traslado</a></li>
		                <li><a href="#">Préstamo</a></li>
		                <li><a href="#">Descargo</a></li>
		                <li><a href="#">Formularios</a></li>
		                <li><a href="{{url('consulta')}}">Consultar</a></li>
		                <li><a href="#">Historial</a></li>
		                <li><a href="#">Usuarios</a></li>	   
		            </ul>
		   		</nav>
		   	</div>
    	</section>
<<<<<<< HEAD

=======
>>>>>>> 5a6ffbbc076f7c182329fdbd1823e51d4994487f
	</header>
</body>
</html>