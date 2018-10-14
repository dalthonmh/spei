@extends('admin.layout')

@section('content')

<!-- TABLE: LATEST ORDERS -->
<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title fontfamilynunito">Préstamos Actuales</h3>
		<div class="box-tools pull-right">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Nuevo Préstamo</button>
		</div>

</script>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 5px;">
      <div class="modal-header">
        <h4 class="modal-title fontfamilynunito" style="display: inline; font-weight: 1000;" id="exampleModalLabel">NUEVO PRÉSTAMO</h4>
        <button type="button" id="" style="display: inline;color: red;outline:none;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-circle"></i></span>
        </button>
      </div>
      <div class="modal-body">
        
		<div class="form-group">
      		<label>Equipos</label>
      		<select name="tags[]" class="form-control select2" 
      			multiple="multiple" 
      			data-placeholder="Selecciona una o mas etiquetas" 
      			style="width: 100%;">
                <option value="">Seleccione un equipo</option>
                <option value="1">proyector 1</option>
                <option value="2">proyector 2</option>
                <option value="3">laptop asus</option>
                <option value="3">extensión</option>
            </select>
            {!! $errors->first('tags','<span class="help-block">:message</span>') !!}
      	</div>

		<div class="form-group">
      		<label>Usuario</label><br>
      		<select name="user_id" class="form-control select2" style="width: 100%;">
      				<option value="">Seleccione un usuario</option>
      				<option value="1">Ing. Edgar Taya</option>
      				<option value="2">Ing. Gianfranco Malaga</option>
      				<option value="3">Ing. Evert Osco</option>
      				<option value="4">Ing. Luis Mori</option>
      				<option value="5">Ing. Manuel Barraza</option>
      		</select>
      	</div>	

		<div class="form-group">
      		<label>Curso</label>
      		<select name="curso_id" class="form-control select2" style="width: 100%;">
      				<option value="">Seleccione un curso</option>
      				<option value="1">Base de Datos</option>
      				<option value="1">Matemática II</option>
      				<option value="1">Telemática</option>
      				<option value="1">Métodos Cuantitativos</option>
      				<option value="1">Gestión de la Ecoeficiencia</option>
      		</select>
      		{!! $errors->first('category_id','<span class="help-block">:message</span>') !!}
      	</div>
		
		<div class="form-group">
      		<label>Ubicación</label>
      		<select name="ubicacion_id" class="form-control select2" style="width: 100%;">
      				<option value="">Seleccione una ubicación</option>
      				<option value="1">Mecánica 3er piso</option>
      				<option value="1">Minas 2 piso</option>
      				<option value="1">Laboratorio C</option>
      				<option value="1">Laboratorio A</option>
      				<option value="1">Administración 2 piso</option>
      		</select>
      		{!! $errors->first('category_id','<span class="help-block">:message</span>') !!}
      	</div>

      	<div class="form-group">
      		<label>Hora Fin</label>
      		<div class="well">
			  <div id="datetimepicker1" class="input-append date">
			    <input data-format="hh:mm" type="text"></input>
			    <span class="add-on" style="display: inline;">
			      <i data-time-icon="icon-time" data-date-icon="icon-calendar" class="fa fa-calendar" style="display: inline;">
			      </i>
			    </span>
			  </div>
			</div>
      	</div>	

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<div class="table-responsive">
			<table class="table no-margin">
				<thead>
					<tr>
						<th>Préstamo ID</th>
						<th>Equipos</th>
						<th>Usuario</th>
						<th>Curso</th>
						<th>Ubicación</th>
						<th>Progreso</th>
						<th>Hora inicio</th>
						<th>Hora fin</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a href="#">01</a></td>
						<td>Proyector 1</td>
						<td>Ing. Edgar Taya</td>
						<td>Base de Datos</td>
						<td>Mecánica 3er piso</td>
						<td>---------</td>
						<td>04:15 PM</td>
						<td>05:50 PM</td>
						<td>
							<a href="{{ route('prestamos.edit',1) }}" class="btn btn-xs btn-info">
								<i class="fa fa-pencil"></i>
							</a>
							<form method="POST" action="{{ route('prestamos.destroy',1) }}" style="display: inline;">
								{{ csrf_field() }}  {{ method_field('DELETE') }}
								<button class="btn btn-xs btn-danger"
									onclick="return confirm('¿Estas seguro que deseas eliminar el préstamo?')">
									<i class="fa fa-trash-o"></i>
								</button>
							</form>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- /.table-responsive -->
	</div>
	<!-- /.box-body -->
	<div class="box-footer clearfix">
	</div>
	<!-- /.box-footer -->
</div>

@stop

@push('styles')

	{{-- <link rel="stylesheet" href="/adminlte/plugins/select2/select2.min.css"> --}}
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  	<link rel="stylesheet" href="/adminlte/plugins/datatables/dataTables.bootstrap.css">
  	<link rel="stylesheet" href="/bootstrap-datetimepicker-0.0.11/css/bootstrap-datetimepicker.min.css">
  	{{-- <link rel="stylesheet" href="/bootstrap-datetimepicker-0.0.11/css/bootstrap-combined.min.css"> --}}

@endpush

@push('scripts')
	<script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
	{{-- <script src="/adminlte/plugins/select2/select2.full.min.js"></script> --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
	<script src="/bootstrap-datetimepicker-0.0.11/js/bootstrap-datetimepicker.min.js"></script>
	{{-- <script src="/bootstrap-datetimepicker-0.0.11/js/bootstrap.min.js"></script> --}}
	<script>
	$.fn.modal.Constructor.prototype.enforceFocus = function() {};
	
	$(".select2").select2();

	//datetime picker
	$(function() {
    $('#datetimepicker1').datetimepicker({
      language: 'en',
      pickDate: false,
      pick12HourFormat: true,
       maskInput: false,
       pickSeconds: false,
    });
  });
</script>
@endpush
