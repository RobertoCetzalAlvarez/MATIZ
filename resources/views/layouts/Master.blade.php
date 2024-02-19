<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta name="token" id="token" value="{{ csrf_token() }}">
</head>
<body class="antialiased">

    <header id="carrusel-contenido">
        <div id="carrusel-caja">
            <div class="carrusel-elemento">
                <img class="imagenes" href="" src="img/utc5.jpeg" >
            </div>

            <div class="carrusel-elemento">   
                <img class="imagenes" href="" src="img/utc1.png">
            </div>

            <div class="carrusel-elemento">   
                <img class="imagenes" href="" src="img/utc7.jpeg">                        
            </div>

        </div>
    </header>

    
    <input type="hidden" name="route" value="{{url('/')}}">
</body>
</html>