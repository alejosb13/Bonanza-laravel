@extends('/plantilla/master')

<!-- Estilos -->
@section('estilo')
<link rel="stylesheet" href="{{asset('/css/accion.css')}}">
@endsection
<!-- End Estilos -->

<!-- Titulo -->
@section('titulo') 
Seleccione un animal
@endsection
<!-- End Titulo -->

<!-- Contenido -->
@section('contenido') 
<div class="tipos">
	<div class="tipo">
		<a href="#" >Toro</a>
	</div>
	<div class="tipo">
		<a href="#" >Becerro</a>
	</div>
	<div class="tipo">
		<a href="#" >Pato</a>
	</div>
	<div class="tipo">
		<a href="#" >gato</a>
	</div>
	<div class="tipo">
		<a href="#" >loro</a>
	</div>
</div>
@endsection
<!-- End Contenido -->