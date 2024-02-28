<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="css/estilos.css">
    <style>
    body {  
        font-family: 'Nunito', sans-serif;
    }
</style>
<meta name="token" id="token" value="{{ csrf_token() }}">
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


    <div class="container">
        
        <div class="card">
            <img src="img/Supervicion_de_reparto_A_R.jpg">
            <h4>Supervisión de Reparto</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="/SPAR">Acceder</a>
        </div>

        <div class="card">
            <img src="img/supervicion_de_corte2.jpg">
            <h4>Supervisión de Cortes</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="/SPC">Acceder</a>
        </div>

        <div class="card">
            <img src="img/DOC.jpg">
            <h4>Control de Documentacion</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <a href="/login">Acceder</a>
        </div>
    </div>
    
    <input type="hidden" name="route" value="{{url('/')}}">
</body>
</html>
