@extends('Template.admin')

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
    {!! Form::open(['route'=>'videos.store','method'=>'POST']) !!}
  <div class="form-group">

    {!! Form::text('url', null, ['class'=>'form-control', 'placeholder'=>'Ingrese Url' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
  </div>
  <div class="form-group">
            <select class="form-control" name="word_id" style="width:400px;height: 45px; ">
            @foreach($words as $word)
              <option value="{{ $word->id }}">{{ $word->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="region_id" style="width:400px;height: 45px; ">
            @foreach($regions as $region)
              <option value="{{ $region->id }}">{{ $region->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="state_id" style="width:400px;height: 45px; ">
            @foreach($states as $state)
              <option value="{{ $state->id }}">{{ $state->description }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="user_id" style="width:400px;height: 45px; ">
            @foreach($users as $user)
              <option value="{{ $user->id }}">{{ $user->name }}</option>
              @endforeach
            </select>
          </div>
  <br>
  <div >
    {!! Form::submit('Registrar', ['class'=> 'btn btn-success']) !!} <a style="margin-left: 30px;" href="{{ route('videos.index') }}">volver a lista</a>
  </div>

  {!! Form::close() !!}
  </div>
</div>
  </div>
  <div class="col-md-4"></div>
</div>

  
@endsection
