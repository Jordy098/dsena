@extends('Template.admin')

@section('formulario')

<div class="row">
  <div class="col-md-4" style="width: 250px;"></div>
  <div class="col-md-4" style="width: 600px";>
  		<div class="panel panel-default">
  <!-- Default panel contents -->
		  <div class="panel-heading"><h4>Palabras</h4></div>
		  <div class="panel-body">
		    @include('flash::message')
		  	<div class="table-responsive">
			
			<br>
			<a type="button" class="btn btn-success" href="{{ route('words.create') }}">Agregar Palabra <span class="glyphicon glyphicon-plus"></span></a>
			<br>
			<br>
			<table class="table table-bordered" style="text-align-last: center;">
		 	<thead>
		 		<th>ID</th>
		 		<th>Nombre</th>
		 		<th>Categoria</th>
		 		<th>Acciones</th>
		 	</thead>
		 	<tbody>
	 		@foreach($words as $word)
	 		<tr>
	 			<td>{{ $word->id }}</td>
	 			<td>{{ $word->name }}</td>
	 			@foreach($categories as $category)
		 			@if($word->category_id==$category->id)
		 			<td>{{ $category->name }}</td>
		 			@endif
	 			@endforeach
	 			<td align="center"><a type="button" class="btn btn-warning" href="{{ route('words.edit',$word->id) }}"><span class="glyphicon glyphicon-pencil"></span></a><a type="button" style="margin-left: 30px;" class="btn btn-danger" href="{{ route('admin.words.destroy',$word->id) }}" onclick="return confirm('Estas seguro que deseas eliminar esta categoria?')"><span class="glyphicon glyphicon-trash"></span></a></td>
	 		</tr>
	 		@endforeach
	 	
	 	</tbody>
	 </table>
	 {{ $words->render() }}
	 </div>
		  </div>
		</div>
	 </div>

  </div>

@endsection