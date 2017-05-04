@extends('Template.admin')

@section('formulario')

<div class="row">
  <div class="col-md-4" style="width: 350px"></div>
  <div class="col-md-4">
  <div class="panel-body">
  @include('flash::message')
  <br>
  <br>
  	{!! Form::open(['route'=>['users.update',$users],'method'=>'PUT']) !!}
	<div class="form-group">

		{!! Form::text('name', '{{ $users->name }}', ['class'=>'form-control', 'placeholder'=>'Ingrese Nombre' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
	</div>
  <div class="form-group">

    {!! Form::text('nickname', '{{ $users->nickname }}', ['class'=>'form-control', 'placeholder'=>'Ingrese Nick' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
  </div>
  <div class="form-group">

    {!! Form::email('email','{{ $users->email }}', ['class'=>'form-control', 'placeholder'=>'example@gmail.com' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
  </div>
  <div class="form-group">

    {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'*******' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
  </div>
	<br>
	<div >
		{!! Form::submit('Actualizar', ['class'=> 'btn btn-warning']) !!}
	</div>

	{!! Form::close() !!}
  </div>

  </div>
  <div class="col-md-4"></div>
</div>

	
@endsection