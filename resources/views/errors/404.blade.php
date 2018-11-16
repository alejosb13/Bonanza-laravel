@extends('/plantilla/master')

<!-- Estilos -->
@section('estilo')
<link rel="stylesheet" href="{{asset('/css/error.css')}}">
@endsection
<!-- End Estilos -->

<!-- Titulo -->
@section('titulo') 
Pagina no encontrada
@endsection
<!-- End Titulo -->

<!-- Contenido -->
@section('contenido') 
<div class="cerror">
	<br><br><br><br><br><br><br><br>
	<span > logo</span>
</div>
@endsection
<!-- End Contenido -->