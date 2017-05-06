<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }}">

<link href="{{asset('css/freelancer.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('icon/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title></title>
</head>
<body>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><font color="#33ff33">D</font>Señas</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @if(Auth::user())
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{ route('admins.index') }}"><span class="icon-home3"></span> Inicio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{ route('words.index') }}"><span class="icon-product-hunt"></span> Palabra</a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{ route('categories.index') }}"><span class="icon-stack"></span> Categoria</a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{ route('videos.index') }}"><span class="icon-film"></span> Video</a>
                    </li>
                    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="icon-user"></span> {{ Auth::user()->nickname }} <span class="caret"></span></a>
          <ul class="dropdown-menu" >
            <li ><a href="{{ route('admins.edit',Auth::user()->id) }}" ><span class="glyphicon glyphicon-pencil"></span> Editar</a></li>
            <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <span class="icon-sign-out"></span>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
          </ul>
        </li>
                </ul>
                @endif
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container" style="margin-top: 150px">
        @yield('formulario')
    </div>
</body>
<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-3.2.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    $('#flash-overlay-modal').modal();
</script>
</html>

