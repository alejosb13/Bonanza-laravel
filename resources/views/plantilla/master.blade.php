<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Bonanza - @yield('titulo')</title>
	<link rel="stylesheet" href="{{asset('/css/master.css')}}">
	@yield('estilo')

</head>
<body>
<div class="container-fluid header">
	<nav class="navbar navbar-default">
		<div class="navbar-header logo">
    		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
      		</button>
      		<img src="{{asset('/img/Bonanza-logo-menu.png')}}">
    	</div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    	<ul class="nav navbar-nav menu-texto">
	        	<li><a href="/php/paginas/home.php">Inicio</a></li>
	        	<li class="dropdown">
	          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Operaciones <span class="caret"></span></a>
	          		<ul class="dropdown-menu">
			            <!-- <li role="separator" class="divider"></li> -->
			            <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Añadir<b class="caret"></b></a>
							<ul class="dropdown-menu">
                                <li><a href="#">Becerra</a></li>
                                <li><a href="#">Becerro</a></li>
					            <li><a href="#">Mauta</a></li>
					            <li><a href="#">Maute</a></li>
					            <li><a href="#">Novilla</a></li>
					            <li><a href="#">Novillo</a></li>
					            <li><a href="#">Toro</a></li>
					            <li><a href="#">Vaca Escotera</a></li>
					            <li><a href="#">Vaca Parida</a></li>
							</ul>
			            </li>
			            	<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Modificar y Eliminar<b class="caret n2"></b></a>
								<ul class="dropdown-menu">
                                	<li><a href="#">Becerra</a></li>
                                <li><a href="#">Becerro</a></li>
					            <li><a href="#">Mauta</a></li>
					            <li><a href="#">Maute</a></li>
					            <li><a href="#">Novilla</a></li>
					            <li><a href="#">Novillo</a></li>
					            <li><a href="#">Toro</a></li>
					            <li><a href="#">Vaca Escotera</a></li>
					            <li><a href="#">Vaca Parida</a></li>
							</ul>
			            </li>
			            <!-- <li><a href="#">Vacuna</a></li> -->
	          		</ul>
	        	</li>
	        	<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Opciones<span class="caret n3"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/php/paginas/cerrar.php">Cerrar Sesión</a></li>
						<li><a href="">Ayuda</a></li>
					</ul>
	        	</li>
	      	</ul>
	    </div><!-- /.navbar-collapse -->
	</nav>
</div>
<div class="clear"></div>
<div class="container-fluid principal">
	<div class="pcontent">
		<h1>@yield('titulo')</h1>
		@yield('contenido')
	</div>
</div>
<div class="clear"></div>
<div class="container-fluid footer">
	<div class="fcontent">
		<span class="derechos">&copy Bonanza 2017 - {{date('Y')}}</span>
		<span class="firma">Realizado por <a href="#">Alejandro Sanchez</a></span>
	</div>
</div>

<script type="text/javascript" src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/master.js')}}"></script>
@yield('javascript')
</body>
</html>