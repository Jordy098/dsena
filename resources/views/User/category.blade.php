@extends('Template.user')

@section('category')
  @foreach($categories as $category)
  <li><a href="{{ url('user/category',$category->id) }}"><span class="glyphicon glyphicon-chevron-right"></span> {{ $category->name }}</a>
  </li>
  @endforeach
@endsection
@section('formulario')

<div class="row" style="margin-top: 70px;">
  <div class="col-md-9 col-md-push-3">
  	<!- derecho -->
  	<div class="row">
  <div class="col-md-6">
  	<!- derecho -->
  	<iframe id="prin" width="480" height="300" src="https://www.youtube.com/embed/{{ $url }}?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
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
  	@if($category->id==$id)
  		@foreach($words as $word)
  		@if($word->category_id==$category->id)
	  	<div id="moopio"><a class="llamar" id="{{ $word->id }}" data-id="{{ $category->id }}" style="text-decoration:none;" href="#{{ $word->id }}/{{ $category->id }}">{{ $word->name }}</a></div>
	  	@endif
	  	@endforeach
    @endif
  @endforeach
	</div>
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function () {
    $(document).on("click", ".llamar", function (event) {
        event.preventDefault();
        //var miElemento = $("#frm").serialize();
        var id_word = $(this).attr("id");
        //var id_category= $(".llamar").attr("data-id");

        $.get("/user/envio/"+id_word,function(response){
          //alert(response);
            $("#prin").replaceWith('<iframe id="prin" width="480" height="300" src="https://www.youtube.com/embed/'+response+'?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>');
          
        });
    });
  });
</script>
@endsection