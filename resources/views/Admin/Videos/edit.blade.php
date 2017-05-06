@extends('Template.admin')

@section('formulario')


<div class="row">
  <div class="col-md-4" style="width: 350px"></div>
  <div class="col-md-4">
  		<div class="panel panel-default" style="width: 450px;">
		  <!-- Default panel contents -->
		  <div class="panel-heading"><h4>Editar Video </h4></div>
		  <div class="panel-body">
				  @include('flash::message')
				  <br>
				  <br>
				  	{!! Form::open(['route'=>['videos.update',$videos],'method'=>'PUT']) !!}

					<div class="form-group">

						{!! Form::text('url', $videos->url, ['class'=>'form-control', 'placeholder'=>'Ingrese Categoria' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
					</div>
					<div class="form-group">
		            <select class="form-control" name="word_id" style="width:400px;height: 45px; " required>
		            @foreach($words as $word)
			              @if($word->id==$videos->word_id)
			              <option selected value="{{ $word->id }}">{{ $word->name }}</option>
			              @else
			              <option value="{{ $word->id }}">{{ $word->name }}</option>
			              @endif
		             @endforeach
		            </select>
		          </div>
		          <div class="form-group">
		            <select class="form-control" name="region_id" style="width:400px;height: 45px; " required>
		            @foreach($regions as $region)
			              @if($region->id==$videos->region_id)
			              <option selected value="{{ $region->id }}">{{ $region->name }}</option>
			              @else
			              <option value="{{ $region->id }}">{{ $region->name }}</option>
			              @endif
		            @endforeach
		            </select>
		          </div>
		          <div class="form-group">
		            <select class="form-control" name="state_id" style="width:400px;height: 45px; " required>
		            @foreach($states as $state)
		            	  @if($state->id==$videos->state_id)
			              <option selected value="{{ $state->id }}">{{ $state->description }}</option>
			              @else
			              <option value="{{ $state->id }}">{{ $state->description }}</option>
			              @endif
		              @endforeach
		            </select>
		          </div>
		          
					<br>
					<div >
						{!! Form::submit('Editar', ['class'=> 'btn btn-warning']) !!} <a style="margin-left: 30px;" href="{{ route('videos.index') }}">volver a lista</a>
					</div>

					{!! Form::close() !!}
		  </div>
	    </div>
  </div>
  <div class="col-md-4"></div>
</div>
	
@endsection