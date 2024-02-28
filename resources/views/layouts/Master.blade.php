<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta name="token" id="token" value="{{ csrf_token() }}">
    @stack('css')
</head>
<body class="antialiased">

    <header id="carrusel-contenido">
        <div id="carrusel-caja">
            <div class="carrusel-elemento">
                <img class="imagenes" href="" src="img/carrusel.jpg" >
            </div>

            <div class="carrusel-elemento">   
                <img class="imagenes" href="" src="img/carrusel1.jpg">
            </div>

            <div class="carrusel-elemento">   
                <img class="imagenes" href="" src="img/carrusel.jpg">                        
            </div>

        </div>
    </header>

    @yield('contenido')




    @stack('scripts')
    <script src="plugins/jquery/jquery.min.js"></script>
    
    <input type="hidden" name="route" value="{{url('/')}}">
</body>
</html>