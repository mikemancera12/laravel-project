<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- cdn bootstrap darkly -->
        
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha256-KC5lAzGRWwscU0sTmXtd8ka5mt7Vk8a0L5JqOhwA28s= sha512-+f2l7T69JKgnn0+Lc8P0WpM4J34GfEIInTI+iLOQWekcR9KxXE1epKQkwzFIZ7mf12jQlCryh2HfZqS8GcpR8Q==" crossorigin="anonymous">
        <!-- finaliza cdn bootstrap darkly -->
        <title>WinNow</title>
        <!-- Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
        $("#banner").css({"height":$(window).height() + "px"});
        var flag = false;
        var scroll;
        $(window).scroll(function(){
        scroll = $(window).scrollTop();
        if(scroll > 100){
        if(!flag){
        $("#logo").css({"margin-top" : "-5px", "width" : "50px", "height" : "50px"});
        $("header").css({"background-color": "#040303"});
        flag = true;
        }
        }else{
        if(flag){
        $("#logo").css({"margin-top" : "150px", "width" :"250px", "height" : "250px"});
        $("header").css({"background-color": "transparent"});
        flag = false;
        }
        }
        });
        });
        </script>
        <style>
        
        
        *{
        margin: 0;
        padding: 0;
        font-family: helvetica;
        }
        section#banner{
        width: 100%;
        background-image: url(../img/leomessi.jpg);
        background-attachment: contain;
        background-position: center;
        background-repeat: no-repeat;
        }
        header{
        position: fixed;
        width: 100%;
        height: 70px;
        background-color: transparent;
        -webkit-transition: background-color .5s;
        -moz-transition: background-color .5s;
        }
        nav{
        display: table;
        margin: auto;
        margin-top: 15px;
        height: 40px;
        -webkit-transition: margin-left .5s;
        -moz-transition: margin-left .5s;
        }
        ul{
        display: block;
        float: left;
        list-style: none;
        }
        ul li{
        float: left;
        margin: 10px;
        padding: 2px;
        }
        ul a{
        color: #F3F3F3;
        text-decoration: none;
        }
        img#logo{
        float: left;
        display: block;
        margin-left: 30px;
        margin-right: 30px;
        margin-top: 150px;
        -webkit-transition: width .5s, height .5s, margin-right .5s, margin-top .5s;
        -moz-transition: width .5s, height .5s, margin-right .5s, margin-top .5s;
        
        }
        </style>
    </head>
    <body>
        
        <header>
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                    <img id="logo" src="imgs/futsoftlogo.png" class="img-circle img-responsive">  </a>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Inicio</a></li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Registrar</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerarr sesión</a></li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- JavaScripts -->
<div class="container">
    <div class="row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{ asset ('imgs/leomessi.jpg')}}" class="img-responsive">
                    <div class="carousel-caption">
                        <h4>Ingresa a las estadísticas de tu equipo y liga</h4>
                        <p><button type="button" class="btn btn-primary">Equipos</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset ('imgs/leomessi.jpg')}}" width="1500px" height="840px" class="img-responsive">
                    <div class="carousel-caption">
                        <h4>Ingresa y administra tu liga</h4>
                        <p><button type="button" class="btn btn-primary">Acceder</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset ('imgs/leomessi.jpg')}}" width="1500px" height="840px" class="img-responsive">
                    <div class="carousel-caption">
                        <h4>Registra equipos y jugadores de tu liga</h4>
                        <p><button type="button" class="btn btn-primary">Acceder</button></p>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</div>
<div class="container well" id="sha" well>
    <div class="row">
        
        <div class="col-xs-12">
            <br />
            <h2><p class="text-center"> Bienvenido a FutSoft</p></h2>
            <h4><p class="text-center"> Administraras  y consultar estadísticas de tu liga</p></h4>
            <br />
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <center><img src="{{ asset ('imgs/Football-Manager.jpg')}}" width="200" height="200" class="img-responsive img-circle"></center>
            
        </div>
        <div class="col-xs-12 col-sm-6">
            <br />
            <center><strong>Administra tu Liga de Football Soccer.</strong>
            <small><p>Podrás organizar tus partidos, puntuaciones baja y alta de equipos o jugadores.
                <a href="#"> Acceder como Administrador. </a></p>
                </small>
                </center>
                <br />
                <br />
                <br />
                <br />
            </div>
            
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-1">
                    <br />
                    <br />
                    <center><strong>Encontraras estadísticas, partidos y puntos de tu Equipo.</strong>
                    <small><p>Tus equipos podrán tener acceso a información sobre sus próximos partidos, horarios y días de juego y posición en la tabla.
                        <a href="#">Más información de Equipos</a></p>
                        </small>
                        </center>
                    </div>
                    <br />
                    <div class="col-xs-12 col-sm-3">
                        <center><img src="{{ asset ('imgs/replica-es.jpg')}}" width="200" height="200" class="img-responsive img-circle"></center>
                        <br />
                        <br />
                        <br />
                        <br />
                    </div>
                    
                    
                </div>
                <div class="row">
                    
                    <div class="col-xs-12 col-sm-6">
                        <center><img src="{{ asset ('imgs/football_manager.jpg')}}" width="200" height="200" class="img-responsive img-circle"></center>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <br />
                        <center><strong>Alta y baja de equipos y jugadores, ingresar resultados.</strong>
                        <small><p>Ingresar los resultados y estadísticas de los partidos que se desarrollaron en la jornada.
                            <a href="#">    Acceder como Administrador.</a></p>
                            </small>
                            </center>
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
            <script src="js/jquery.min.js"></script>
        </body>
    </html>