<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NCF</title>

    <!-- Bootstrap Core CSS -->
    <link href= "{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/stylestable.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/select2.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" >Agencia Aduanal del valle</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/menu">inicio</a>
                     </li>
                     <li>
                        <a href="#myModal" id="openBtn" data-toggle="modal">Alta de  NFC</a>

                     </li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mis NCF <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @if(Auth::User()->nivel == '1' || Auth::User()->nivel == '2'  )  <!--  Opciones por nivel de validadcion  -->
                                <li><a href="#">Abiertas   </a></li>
                                <li><a href="#">Finalizadas</a></li>
                                <li><a href="#">En proceso </a></li>
                                <li role="separator" class="divider"></li>
                            @endif
                            <li><a href="#">historial</a></li>
                            <li><a href="#">Mis NCF  </a></li> <!-- consecutivos por años -->
                        </ul>
                    </li>
                    <li  class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Configuraciones <span class="caret"></span></a>
                         <ul class="dropdown-menu">
                             <!--  Opciones por nivel de validadcion  -->
                             @if(Auth::User()->nivel == '1')
                                <li><a href="/alta">Alta de usuarios</a></li>
                                @endif
                                <li role="separator" class="divider"></li>
                         </ul>
                    </li>
                    <li><a>{!!Auth::User()->NombreC!!}</a></li>
                    <li>
                       <a href="/logout">Salir</a>
                    </li>
                    <!-- -->

                    <!-- -->

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        @yield('content')
            <!--div class="row">
            <div class="col-lg-12 text-center">
                <h1>Body</h1>
                <p class="lead">Implementar vista</p>
                <ul class="list-unstyled">
                    <li>vistas</li>
                    <li>vistas</li>
                </ul>
            </div>
           </div-->
            <!-- /.row -->
    </div>
    <!-- /.container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/angular.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/app.js')}}"></script>
        <script src="{{ URL::asset('assets/js/select2.min.js')}}"></script>


</body>

</html>
