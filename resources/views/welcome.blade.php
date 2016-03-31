@extends('layouts.app')
@section('content')
<!--  <div class="container-fluid">
    <div class="row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4">bal
            <img src="{{ asset ('imgs/pngnow.png')}}" class="img-responsive">
        </div>
        <div class="col-xs-4"></div>
        
    </div>
</div> -->


<!-- carrousel -->

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
                    <img src="{{ asset ('imgs/nube.jpg')}}" width="1500" height="840">
                    <div class="carousel-caption">
                        <h4>Ingresa a las estadísticas de tu equipo y liga</h4>
                        <p><button type="button" class="btn btn-primary">Equipos</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset ('imgs/if.jpg')}}" width="1500" height="840">
                    <div class="carousel-caption">
                        <h4>Ingresa y administra tu liga</h4>
                        <p><button type="button" class="btn btn-primary">Acceder</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset ('imgs/luz.jpg')}}" width="1500" height="840">
                    <div class="carousel-caption">
                        <h4>Registra equipos y jugadores de tu liga</h4>
                        <p><button type="button" class="btn btn-primary">Acceder</button></p>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</div>
<!-- finaliza carrousel -->

<div class="container-fluid well text-center">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="lobster">
            Relájate... Agilizamos tu negocio, tu profesión, tu vida.
            </h2>
        </div>
    </div>
</div>
<br>
<div class="container text-center">
    <div class="row">
        <br>
        <br>
   
        <div class="col-xs-4">
            
            <img src="{{ asset ('imgs/opiniones.jpg')}}" width="120" height="80" class="img-circle">
            <h3 class="text-center pacifico">Software en la Nube</h3>
            <p align="justify">
                En WinNow te ofrecemos lo último en tecnología diseñamos software administrativo en la nube para diversos giros. Con nuestras soluciones tendrás seguridad, acceso total y bajos costos de mantenimiento.
            </p>
            <br>
        </div>
        <div class="col-xs-4">
            <img src="{{ asset ('imgs/plataforma.png')}}" width="120" height="80" class="img-circle">
            <h3 class="text-center pacifico">Servicios a la medida</h3>
            <p align="justify">
                En WinNow te ofrecemos una serie de servicios completamente personalizados, a la medida de tus requerimientos y los de tu negocio con un bajo costo de activacion generamos un software de administracion unico para tu negocio
            </p>
            <br>
        </div>
        <div class="col-xs-4">
            
            <img src="{{ asset ('imgs/if.jpg')}}" width="120" height="80" class="img-circle">
            <h3 class="text-center pacifico">Productos Prediseñados</h3>
            <p align="justify">
                Contamos con un softaware de administracion prediseñado y autoconfigurable, sin costo de activacion ni personalizacion, estos productos se ajustan a las necesidades generales de cualquier empresa.
            </p>
            <br>
        </div>
    </div>
</div>
<!--  <div class="container-fluid text-center">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="lobster">
            Herramientas de control Administrativo
            </h1>
            
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4">
            <img src=" {{asset ('imgs/messi.png')}}" width="400" height="800">
        </div>
        <div class="col-xs-4">
            <img src="{{ asset ('imgs/futsoftlogo.png')}}" width="420" height="250">
            <br>
            <h2>
            Administra tu cancha de fútbol.
            </h2>
            <p class="text-justify">
                
                FutSoft7 es un Software de Administración de Canchas de Fútbol en línea con el cuál podrás, desde cualquier computadora con Internet, Administrar todo lo referente a Tus canchas de Fútbol y sus Torneos.
                Registra pagos, genera reportes de adeudos, ingresos, entre otros.
                Genera tu Rol de Juegos de manera automática, registra fácilmente resultados y genera estadísticas al instante.
                Todo lo reflejarás desde tu Sitio Web.
                <br>
                Los jugadores podrán consultar el calendario, las estadísticas, los sancionados, resultados, etc en una página de internet.
                <br>
                FutSost7 es un software para canchas de fútbol rápido, fútbol 7 y otros estilos. Con esta herramienta simplificas la programación de roles de juego y la generación de resultados de juego, grupos y estadísticas. Además, cuenta con un punto de venta que te permite registrar los pagos de arbitraje, venta de unformes y cafetería llevando un control de inventarios.
                <br>
                <br>
            </p>
            <p class="text-center">
                ¡Con FutSoft7, lleva a tu Cancha al siguiente Nivel!
                
            </p>
        </div>
        <div class="col-xs-4">
            <br>
            <br>
            <img src="{{ asset ('imgs/cr7.png')}}" width="300" height="700">
        </div>
    </div>
</div>
 -->
@endsection
