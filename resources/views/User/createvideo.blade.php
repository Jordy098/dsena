@extends('Template.user')

@section('category')
  @foreach($categories as $category)
  <li><a href="{{ url('user/category',$category->id) }}"><span class="glyphicon glyphicon-chevron-right"></span> {{ $category->name }}</a>
  </li>
  @endforeach
@endsection
@section('formulario')

<div class="row">
  <div class="col-md-4" style="width: 350px"></div>
  <div class="col-md-4">
  <div class="panel panel-default" style="width: 450px;">
  <div class="panel-heading"><h4>Crear Video</h4></div>
  <div class="panel-body">
      
  @include('flash::message')
  <br>
  <br>
    {!! Form::open(['route'=>'video.store','method'=>'POST']) !!}
  <div class="form-group">

    {!! Form::text('url', null, ['class'=>'form-control', 'placeholder'=>'Ingrese Url' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
  </div>
  			<div class="form-group">
            <select class="form-control" name="word_id" style="width:400px;height: 45px; ">
            <option value="">Seleccione una Palabra</option>
            @foreach($words as $word)
              <option value="{{ $word->id }}">{{ $word->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="region_id" style="width:400px;height: 45px; ">
            <option value="">Seleccione una Región</option>
            @foreach($regions as $region)
              <option value="{{ $region->id }}">{{ $region->name }}</option>
              @endforeach
            </select>
          </div>
          <input type="" name="user_id" style="visibility: hidden;" value="{{ Auth::user()->id }}">
  <br>
  <div >
    {!! Form::submit('Registrar', ['class'=> 'btn btn-success']) !!} <a style="margin-left: 30px;" href="{{ route('users.index') }}">volver a inicio</a>
  </div>

  {!! Form::close() !!}
  </div>
</div>
  </div>
  <div class="col-md-4"></div>
</div>

  
@endsection
