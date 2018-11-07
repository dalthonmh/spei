@extends('admin.layout')

@section('content')

<!-- TABLE: LATEST ORDERS -->
<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title fontfamilynunito">Préstamos Actuales</h3>
		<div class="box-tools pull-right">
			<button 
				type="button" 
				class="btn btn-primary" 
				data-toggle="modal" 
				data-target="#exampleModal"><i class="fa fa-plus"></i> Nuevo Préstamo</button>
		</div>


	@include('admin.prestamos.modal-prestamo')

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
						<td><div id="progressbar1"></div></td>
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

					<tr>
						<td><a href="#">01</a></td>
						<td>Proyector 1</td>
						<td>Ing. Edgar Taya</td>
						<td>Base de Datos</td>
						<td>Mecánica 3er piso</td>
						<td><div id="progressbar1"></div></td>
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
<link rel="stylesheet" href="/modulos_node/bootstrap-datetimepicker-0.0.11/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="/modulos_node/LineProgressbar-master/jquery.lineProgressbar.css">
{{-- <link rel="stylesheet" href="/bootstrap-datetimepicker-0.0.11/css/bootstrap-combined.min.css"> --}}

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
{{-- <script src="/adminlte/plugins/select2/select2.full.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="/modulos_node/bootstrap-datetimepicker-0.0.11/js/bootstrap-datetimepicker.min.js"></script>
<script src="/modulos_node/LineProgressbar-master/jquery.lineProgressbar.js"></script>
{{-- <script src="/bootstrap-datetimepicker-0.0.11/js/bootstrap.min.js"></script> --}}
<script src="{{ asset('js/app.js') }}" defer></script>
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

	$('#progressbar1').LineProgressbar({
		percentage: 100,
		duration: 6000000,
		radius: 5,
	});
</script>
@endpush
