@extends('Template.admin')

@section('formulario')


<div class="row">
  <div class="col-md-4" style="width: 350px"></div>
  <div class="col-md-4">
  		<div class="panel panel-default" style="width: 450px;">
		  <!-- Default panel contents -->
		  <div class="panel-heading"><h4>Editar Palabra "{{ $words->name }}"</h4></div>
		  <div class="panel-body">
				  @include('flash::message')
				  <br>
				  <br>
				  	{!! Form::open(['route'=>['words.update',$words],'method'=>'PUT']) !!}

					<div class="form-group">

						{!! Form::text('name', $words->name, ['class'=>'form-control', 'placeholder'=>'Ingrese Categoria' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
					</div>
					<div class="form-group">
						<select class="form-control" name="category_id" style="width:400px;height: 45px;" required>
						@foreach($categories as $category)
						  @if($category->id==$words->category_id)
						  <option selected value="{{ $category->id }}">{{ $category->name }}</option>
						  @else
						  <option value="{{ $category->id }}">{{ $category->name }}</option>
						  @endif
						@endforeach
						</select>
					</div>
					<br>
					<div >
						{!! Form::submit('Editar', ['class'=> 'btn btn-warning']) !!} <a style="margin-left: 30px;" href="{{ route('words.index') }}">volver a lista</a>
					</div>

					{!! Form::close() !!}
		  </div>
	    </div>
  </div>
  <div class="col-md-4"></div>
</div>
	
@endsection