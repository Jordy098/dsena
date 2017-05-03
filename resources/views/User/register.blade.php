@extends('Template.registro')

@section('formulario')

<div class="row">
  <div class="col-md-4" style="width: 350px"></div>
  <div class="col-md-4">
  <div class="panel-body">
  @include('flash::message')
  <br>
  <br>
  	{!! Form::open(['route'=>'users.store','method'=>'POST']) !!}
	<div class="form-group">

		{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese Nombre' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
	</div>
  <div class="form-group">

    {!! Form::text('nickname', null, ['class'=>'form-control', 'placeholder'=>'Ingrese Nick' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
  </div>
  <div class="form-group">

    {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'example@gmail.com' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
  </div>
  <div class="form-group">

    {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'*******' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
  </div>
  <div class="form-group">
  <h6>fecha de nacimiento</h6>
    {!! Form::date('birthday', null, ['class'=>'form-control', 'placeholder'=>'Ingrese Nombre' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
  </div>
	<br>
	<div >
		{!! Form::submit('Registrar', ['class'=> 'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}
  </div>

  </div>
  <div class="col-md-4"></div>
</div>

	
@endsection