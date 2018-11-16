@extends('/plantilla/master')

<!-- Estilos -->
@section('estilo')
<link rel="stylesheet" href="{{asset('/css/agregar.css')}}">
@endsection
<!-- End Estilos -->

<!-- Titulo -->
@section('titulo') 
Agregar {{ $titulo }}s
@endsection
<!-- End Titulo -->

<!-- Contenido -->
@section('contenido') 
<div class="container">
	<div class="formulario">
		<form action="{{ url('/agregar/guardar') }}" method="post">
			<input type="hidden" value="{{ $validar_tipo["tipo"]->id }}" name="tipo">
			{{ csrf_field() }}
			<div class="form-group @php echo $errors->first('descripcion')  @endphp">
				<textarea name="descripcion" placeholder="Ingrese Descripciòn del Animal" class="form-control">{{ old('descripcion') }}</textarea>
			</div>
			<div class="short">
				<div class="form-group col-md-6 right @php echo $errors->first('numero')  @endphp">
					<input type="number" placeholder="Ingrese el Numero del Animal" name="numero" class="form-control "  value="{{ old('numero') }}" min="1">
				</div>
				<div class="form-group col-md-6 left @php echo $errors->first('peso')  @endphp">
					<div class="input-group ">
						<input type="number" placeholder="Ingrese el Peso del Animal" name="peso"  class="form-control" aria-describedby="basic-addon2" value="{{ old('peso') }}" min="10"><span class="input-group-addon" id="basic-addon2">Kg</span>
					</div>
				</div>
			</div>
			
			<input type="submit" class="btn btn-block boton" value="Agregar" >

		</form>
	</div>
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@if($errors->first('numero') == 'has-error')
				<li><i>Complete los campos en rojo</i></li>
				@else
				<li><i>El Numero del Animal ya existe</i></li>
				@endif
			</ul>		
		</div>
	@endif

	<div class="container-fluid info">
		<h3 class=" text-success"><b>Lista de {{ $titulo }}s</b></h3>
		<div class="vpaginacion">
			<span class="cantidad text-success"><b>Cantidad :</b> {{ $validar_tipo["registros"]->total() }} {{ $titulo }}s </span>
		</div>
	</div>
	<div class="resultados table-responsive">
		<table class="table table-hover resu">
			<thead>
				<tr>
					<th class="r1">Cantidad</th>
					<th class="r2">Descripcion</th>
					<th class="r3">Numero</th>
					<th class="r4">Peso</th>
				</tr>
			</thead>
			<tbody>
			@forelse($validar_tipo["registros"] as $registro)
				<tr>
					<td><span class="r1">{{ $validar_tipo["total"]-- }}</span></td>
					<td><span class="r2">{{ $registro->descripcion }}</span></td>
					<td><span class="r3">{{ $registro->numero }}</span></td>
					<td><span class="r4">{{ $registro->peso }}<b>Kg</b></span></td>
				</tr>
			@empty
				<tr>
					<td> Campo Vacio</td>
				</tr>
			@endforelse

			</tbody>
		</table>
	</div>
</div>
@endsection
<!-- End Contenido -->