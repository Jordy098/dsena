@extends('Template.admin')

@section('formulario')


<div class="row">
  <div class="col-md-4" style="width: 350px"></div>
  <div class="col-md-4">
  		<div class="panel panel-default" style="width: 450px;">
		  <!-- Default panel contents -->
		  <div class="panel-heading"><h4>Editar Categoria "{{ $categories->nombre }}"</h4></div>
		  <div class="panel-body">
				  @include('flash::message')
				  <br>
				  <br>
				  	{!! Form::open(['route'=>['categories.update',$categories],'method'=>'PUT']) !!}

					<div class="form-group">

						{!! Form::text('name', $categories->name, ['class'=>'form-control', 'placeholder'=>'Ingrese Categoria' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
					</div>
					<br>
					<div >
						{!! Form::submit('Editar', ['class'=> 'btn btn-warning']) !!} <a style="margin-left: 30px;" href="{{ route('categories.index') }}">volver a lista</a>
					</div>

					{!! Form::close() !!}
		  </div>
	    </div>
  </div>
  <div class="col-md-4"></div>
</div>
	
@endsection