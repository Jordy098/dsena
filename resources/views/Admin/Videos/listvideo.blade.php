@extends('Template.admin')

@section('formulario')


  <div class="table-responsive">
  <div class="panel panel-default">
  <!-- Default panel contents -->
		  <div class="panel-heading"><h4>Videos</h4></div>
		  <div class="panel-body">
		    @include('flash::message')
		  	
			
			<br>
			<a type="button" class="btn btn-success" href="{{ route('videos.create') }}">Agregar Video <span class="glyphicon glyphicon-plus"></span></a>
			<br>
			<br>
			<table class="table table-bordered" style="text-align-last: center;">
		 	<thead>
		 		<th>ID</th>
		 		<th>Url</th>
		 		<th>Palabra</th>
		 		<th>Region</th>
		 		<th>Estado</th>
		 		<th>Usuarios</th>
		 		<th>Acciones</th>
		 	</thead>
		 	<tbody>
	 		@foreach($videos as $video)
	 		<tr>
	 			<td>{{ $video->id }}</td>
	 			<td>{{ $video->url }}</td>
	 			@foreach($words as $word)
		 			@if($word->id==$video->word_id)
		 			<td>{{ $word->name }}</td>
		 			@endif
	 			@endforeach
	 			@foreach($regions as $region)
		 			@if($region->id==$video->region_id)
		 			<td>{{ $region->name }}</td>
		 			@endif
	 			@endforeach
	 			@foreach($states as $state)
		 			@if($state->id==$video->state_id)
		 			<td>{{ $state->description }}</td>
		 			@endif
	 			@endforeach
	 			@foreach($users as $user)
		 			@if($user->id==$video->user_id)
		 			<td>{{ $user->name }}</td>
		 			@endif
	 			@endforeach
	 			<td align="center"><div><a type="button" class="btn btn-warning" href="{{ route('videos.edit',$video->id) }}"><span class="glyphicon glyphicon-pencil"></span></a></div><div><a type="button" style="" class="btn btn-danger" href="{{ route('admin.videos.destroy',$video->id) }}" onclick="return confirm('Estas seguro que deseas eliminar esta categoria?')"><span class="glyphicon glyphicon-trash"></span></a></div></td>
	 		</tr>
	 		@endforeach
	 	</tbody>
	 </table>
	 {{ $videos->render() }}
	 
		  </div>
		</div>
</div>


@endsection