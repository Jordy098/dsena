@extends('Template.admin')

@section('formulario')

<div class="row">
  <div class="col-md-4" style="width: 350px"></div>
  <div class="col-md-4">
  <div class="panel-body">
  @include('flash::message')
  <br>
  <br>
  	{!! Form::open(['route'=>['admins.update',$users],'method'=>'PUT']) !!}
	<div class="form-group">
  <label>Nombre</label>
		{!! Form::text('name', $users->name , ['class'=>'form-control', 'placeholder'=>'Ingrese Nombre' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
	</div>
  <div class="form-group">
<label>Nick</label>
    {!! Form::text('nickname', $users->nickname , ['class'=>'form-control', 'placeholder'=>'Ingrese Nick' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
  </div>
  <div class="form-group">
<label>Correo</label>
    {!! Form::email('email', $users->email , ['class'=>'form-control', 'placeholder'=>'example@gmail.com' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
  </div>
  <div class="form-group">
  <label>Contraseña</label>
    <input type="password" name="password" value="{{ $users->password }}" class="form-control" placeholder="********" style="width: 400px;height: 45px;">
  </div>
	<br>
	<div >
		{!! Form::submit('Editar', ['class'=> 'btn btn-warning']) !!}
    <a style="margin-left: 30px;" href="{{ route('admins.index') }}">volver a inicio</a>
	</div>

	{!! Form::close() !!}
  </div>

  </div>
  <div class="col-md-4"></div>
</div>

	
@endsection