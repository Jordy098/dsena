@extends('Template.user')

@section('formulario')

<div class="row">
  <div class="col-md-9 col-md-push-3">
  	<!- derecho -->
  	<div class="row">
  <div class="col-md-6">
  	<!- derecho -->
  	<iframe width="480" height="300" src="https://www.youtube.com/embed/7Cf4VQkS1Kg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
  </div>
  <div class="col-md-6">
  <!- izquierdo -->
  	<div style="margin-left: 60px;"><iframe width="320" height="150" src="https://www.youtube.com/embed/7Cf4VQkS1Kg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
  	<div style="margin-left: 60px;"><iframe width="320" height="150" src="https://www.youtube.com/embed/7Cf4VQkS1Kg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
  </div>
</div>
  	
  </div>
  <div class="col-md-3 col-md-pull-9">
  <!- izquierdo -->
	<div class="form-control" style="overflow: scroll;height: 300px;">
	@foreach($categories as $category)
  	@if($category->id=='1')
  		@foreach($words as $word)
  		@if($word->category_id==$category->id)
	  	<div id="moopio"><a style="text-decoration:none;" href="#{{ $word->id }}">{{ $word->name }}</a></div>
	  	@endif
	  	@endforeach
    @endif
  	@endforeach
	</div>
  </div>
</div>

@endsection