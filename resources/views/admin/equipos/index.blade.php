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
  <table id="posts-table" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>ID</th>
      <th>Título</th>
      <th>Extracto</th>
      <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
		@foreach($posts as $post)
			<tr>
				<td>{{ $post->id }}</td>
				<td>{{ $post->title }}</td>
				<td>{{ $post->excerpt }}</td>
				<td>
					<a href="{{ route('posts.show',$post) }}" target="_blank" class="btn btn-xs btn-info">
						<i class="fa fa-eye"></i>
					</a>
					<a href="{{ route('admin.posts.edit',$post) }}" class="btn btn-xs btn-info">
						<i class="fa fa-pencil"></i>
					</a>
					<form method="POST" action="{{ route('admin.posts.destroy',$post) }}" style="display: inline;">
						{{ csrf_field() }}  {{ method_field('DELETE') }}
						<button class="btn btn-xs btn-danger"
							onclick="return confirm('¿Estas seguro que deseas eliminar el post?')">
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