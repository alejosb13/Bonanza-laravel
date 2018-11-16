@extends('/plantilla/master')

<!-- Estilos -->
@section('estilo')
<link rel="stylesheet" href="{{asset('/css/modificar.css')}}">
@endsection
<!-- End Estilos -->

<!-- Titulo -->
@section('titulo') 
Modificar y Eliminar
@endsection
<!-- End Titulo -->

<!-- Contenido -->
@section('contenido') 
		<div class="vpaginacion">
			<span class="cantidad text-success" id="test"><b>Cantidad :</b> 
				<span id="cantidad">{{ $validar_tipo["registros"]->total() }}</span> {{ $titulo }}s 
			</span>
		</div>
<div class="resultados table-responsive">
	<table class="table table-hover resu">
		<thead>
			<tr>
				<th class="r1">Cantidad</th>
				<th class="r2">Descripcion</th>
				<th class="r3">Numero</th>
				<th class="r4">Peso</th>
				<th class="r5">Editar</th>
				<th class="r6">Eliminar</th>
			</tr>
		</thead>
		<tbody>
		@forelse($validar_tipo["registros"] as $registro)
			<tr id="fila{{ $loop->iteration }}">
				<td><span class="r1">{{ $validar_tipo["total"]-- }}</span></td>
				<td><span class="r2">{{ $registro->descripcion }}</span></td>
				<td><span class="r3">{{ $registro->numero }}</span></td>
				<td><span class="r4">{{ $registro->peso }}<b>Kg</b></span></td>
				<td>
					<p data-placement="top" data-toggle="tooltip" title="Editar" data-link="{{ route('EditarRegistro',array($validar_tipo["tipo"]->detalle,$registro->numero)) }}" class="editar">
						<button class="btn btn-primary btn-xs" data-title="edit"  data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button>
					</p>
				</td>
				<td>
					<p data-placement="top" data-toggle="tooltip" title="Eliminar" class="ruta" data-action="{{ route('EliminarRegistro',array($validar_tipo["tipo"]->detalle,$registro->numero)) }}" data-row="#fila{{ $loop->iteration }}">
						<span class="btn btn-danger btn-xs" data-title="Eliminar" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></span> 
					</p>
				</td>
			</tr>
		@empty
			<tr>
				<td> Campo Vacio</td>
			</tr>
		@endforelse
		</tbody>
	</table>
</div>

<div class="clearfix"></div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
    	<div class="modal-content">
	    	<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
		        <h4 class="modal-title custom_align" id="Heading">Modificar Datos</h4>
		    </div>
	    <form action="" method="post" id="rutal">
			@method('PUT')
			@csrf
       		<div class="modal-body" >
				<input type="hidden" name="" value="">
				<div class="form-group">
					<label for="">Descripcion</label>
				    <textarea name="descripcion" class="form-control" id="descripcion" placeholder="Descripcion Nueva" id="" cols="" rows="2"></textarea>
				</div>
				<div class="row">
					<div class="col-md-6 input1">
					    <div class="form-group ">
						    <label for="">Numero</label>
							<input name="numero" class="form-control" id="numero" type="text" placeholder="Numero Nuevo"  value="" autocomplete="off">
						</div>
					</div>
					<div class="col-md-3 minput input2">
						<div class="form-group ">
						    <label for="">Peso</label>
							<input type="number" name="peso" value="" id="peso" placeholder="Peso Nuevo" autocomplete="off" class="form-control vpeso">        
						</div>
					</div>
					<div class="col-md-3 minput input2">
						<div class="form-group ">
						    <label for="">Diferencia</label>
						    <input type="hidden" name="pesoa" class="pesoa" id="pesoa" value="">
						    <span class="icondif glyphicon "></span>
							<span class=" resdif text-center" id="resdif"></span>		   
						</div>
					</div>
				</div>
				<div class="form-group">
				    <label for="">Tipo</label>
				    <input type="hidden" value="" class="tipo">
					<select name="id_tipo"   class="form-control">
						<option class="tipo" id="tipo" value="" selected></option>
						<option value="1">Toro</option>
						<option value="2">Vaca Parida</option>
						<option value="3">Vaca Escotera</option>
						<option value="4">Novilla</option>
						<option value="5">Novillo</option>
						<option value="6">Maute</option>
						<option value="7">Mauta</option>
						<option value="8">Becerro</option>
						<option value="9">Becerra</option>		
					</select>	
				</div>
			</div>
        	<div class="modal-footer ">
        		<input type="submit" class="btn btn-success " value="Modificar">
        		<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;Cancelar</button>
      		</div>
    	</form>
    </div>
    <!-- /.modal-content --> 
</div>
      <!-- /.modal-dialog --> 
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
	    <div class="modal-content" id="eliminar">
	        <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
		        <h4 class="modal-title custom_align" id="Heading">Presione OK para Eliminar </h4>
	      	</div>
		    <div class="modal-body" >
				<div class="alert alert-danger">
		    		<input type="hidden" name="id_dregistro">
		    		<span class="glyphicon glyphicon-warning-sign"></span> 
		    		Para eliminar el animal seleccione una causa.
		    	</div>
			    <select id="causa" class="form-control" name="status">
					<option value="" >Seleccione una causa</option>
					<option value="Venta" >Venta</option>
					<option value="Muerte" >Muerte</option>
					<option value="Perdida" >Perdida</option>
					<option value="Otra causa" >Otra causa</option>
				</select>
		    </div>
			
		    <div class="modal-footer ">
				<form action="" method="post" id="fenvio" data-row="" >
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="button" disabled="" data-dismiss="modal" class="btn btn-success" id="envio" ><span class="glyphicon glyphicon-ok-sign"></span> Ok </button>
			        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
			    </form>
		    </div>	
		</div>
	    <!-- /.modal-content --> 
	</div>
	<!-- /.modal-dialog --> 
</div>
@endsection
<!-- End Contenido -->