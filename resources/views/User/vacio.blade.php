@extends('Template.user')

@section('category')
  @foreach($categories as $category)
  <li><a href="{{ url('user/category',$category->id) }}"><span class="glyphicon glyphicon-chevron-right"></span> {{ $category->name }}</a>
  </li>
  @endforeach
@endsection
@section('formulario')
@include('flash::message')
@endsection