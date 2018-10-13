@extends('admin.layout')

@section('content')
	

<div class="box box-primary">
<div class="box-header">
  <h3 class="box-title">Lista de equipos</h3>
  <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">
  	<i class="fa fa-plus"></i> Agregar nuevo equipo</button>
</div>
<!-- /.box-header -->
<div class="box-body">
  <table id="equipos-table" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Estado</th>
      <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
		@foreach($equipos as $equipo)
			<tr>
				<td>{{ $equipo->id }}</td>
				<td>{{ $equipo->nombre }}</td>
				<td>{{ $equipo->estado }}</td>
				<td>
					<a href="{{ route('admin.equipos.show',$equipo) }}" target="_blank" class="btn btn-xs btn-info">
						<i class="fa fa-eye"></i>
					</a>
					<a href="{{ route('admin.equipos.edit',$equipo) }}" class="btn btn-xs btn-info">
						<i class="fa fa-pencil"></i>
					</a>
					<form method="equipo" action="{{ route('admin.equipos.destroy',$equipo) }}" style="display: inline;">
						{{ csrf_field() }}  {{ method_field('DELETE') }}
						<button class="btn btn-xs btn-danger"
							onclick="return confirm('¿Estas seguro que deseas eliminar el equipo?')">
							<i class="fa fa-trash-o"></i>
						</button>
					</form>
				</td>
			</tr>
		@endforeach
    </tbody>
    
  </table>
</div>
<!-- /.box-body -->
</div>


@endsection