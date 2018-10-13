@extends('admin.layout')

@section('content')

<!-- TABLE: LATEST ORDERS -->
<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title fontfamilynunito">Préstamos Actuales</h3>
		<div class="box-tools pull-right">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Nuevo Préstamo</button>
		</div>
<style>
#btn-no-color{
	color: red;
}
</style>

</script>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 5px;">
      <div class="modal-header">
        <h5 class="modal-title fontfamilynunito" style="display: inline; font-weight: 1000;" id="exampleModalLabel">Nuevo Préstamo</h5>
        <button type="button" id="btn-no-color" style="display: inline;color: red;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-circle"></i></span>
        </button>
      </div>
      <div class="modal-body">
        ...
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
						<th>Progreso</th>
						<th>Hora inicio</th>
						<th>Hora fin</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a href="#">OR9842</a></td>
						<td>Proyector 1</td>
						<td>Ing. Edgar Taya</td>
						<td>Base de Datos</td>
						<td>---------</td>
						<td>04:15 PM</td>
						<td>05:50 PM</td>
						<td>
							<a href="{{ route('admin.prestamos.edit',1) }}" class="btn btn-xs btn-info">
								<i class="fa fa-pencil"></i>
							</a>
							<form method="POST" action="{{ route('admin.prestamos.destroy',1) }}" style="display: inline;">
								{{ csrf_field() }}  {{ method_field('DELETE') }}
								<button class="btn btn-xs btn-danger"
									onclick="return confirm('¿Estas seguro que deseas eliminar el préstamo?')">
									<i class="fa fa-trash-o"></i>
								</button>
							</form>
						</td>
					</tr
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

@endsection