@extends('Template.admin')
@section('formulario')

<div class="row" style="margin-top: 90px;">
  <div class="col-xs-6 col-sm-3">
  <img src="{{ asset('img/imag/categoria.png') }}" width="200" height="200" style="margin-left: 40px;">
  <div style="margin-left: 95px;"><a href="{{ route('categories.index') }}" class="btn btn-primary">Categoria</a></div>
  </div>
  <div class="col-xs-6 col-sm-3">
  	<img src="{{ asset('img/imag/lista.png') }}" width="200" height="200" style="margin-left: 40px;">
  	<div style="margin-left: 80px;"><a href="{{ route('words.index') }}" class="btn btn-primary">Palabras</a></div>
  </div>
  <div class="col-xs-6 col-sm-3" style="margin-top: 30px;">
  	<img src="{{ asset('img/imag/video.png') }}" width="200" height="150" style="margin-left: 40px;">
  	<div style="margin-left: 110px;margin-top: 20px;"><a href="{{ route('videos.index') }}" class="btn btn-primary">Video</a></div>
  </div>
  <div class="col-xs-6 col-sm-3">
  	<img src="{{ asset('img/imag/listvideo.png') }}" width="200" height="200" style="margin-left: 40px;">
  	<div style="margin-left: 78px;"><a href="#" class="btn btn-primary">Lista de Videos</a></div>
  </div>
</div>
@endsection