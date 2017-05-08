@extends('Template.user')

@section('category')
  @foreach($categories as $category)
  <li><a href="{{ url('user/category',$category->id) }}"><span class="glyphicon glyphicon-chevron-right"></span> {{ $category->name }}</a>
  </li>
  @endforeach
@endsection
@section('formulario')

<div class="row" style="margin-top: 60px;">
  <div class="col-md-9 col-md-push-3">
  	<!-- derecho -->
  	<div class="row">
  <div class="col-md-6" style="margin-top: 10px;">
  	<!-- izquierdo -->
  	<iframe id="prin" width="480" height="300" src="https://www.youtube.com/embed/{{ $url }}?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    <div >
        <div class="ec-stars-wrapper" style="margin-right:10px">
          <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
          <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
          <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
          <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
          <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
        </div>
        <button style="background-color: green"><font color="#fff">Votar</font></button>
        <div>
          <h5>(0)votos</h5>
        </div>
      </div> 
  </div>
  <div class="col-md-6">
  <!-- derecho -->
  	<div style="margin-left: 60px;"><iframe width="320" height="150" src="https://www.youtube.com/embed/7Cf4VQkS1Kg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    <div>
      <div class="ec-stars-wrapper" style="margin-right:10px">
          <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
          <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
          <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
          <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
          <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
        </div>
        <button style="background-color: green"><font color="#fff">Votar</font></button>
    </div>
    </div>
  	<div style="margin-left: 60px;margin-top: 10px"><iframe width="320" height="150" src="https://www.youtube.com/embed/7Cf4VQkS1Kg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    <div>
      <div class="ec-stars-wrapper" style="margin-right:10px">
          <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
          <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
          <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
          <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
          <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
        </div>
        <button style="background-color: green"><font color="#fff">Votar</font></button>
    </div>
    </div>
  </div>
</div>
  	
  </div>
  <div class="col-md-3 col-md-pull-9">
  <!-- izquierdo -->
  <div>
    <form>
      <button class="btn btn-default" style="margin-right: 15px"><span class="icon-mic"></span></button><input  type="" name="" style="border-radius: 4px;margin-right: 10px"><button class="btn btn-default"><span class="icon-search"></span></button>
    </form>
  </div>
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