@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRINCIPAL WEB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color:black;">   
<!-- PAGINA PRNCIPAL DE LA WEB -->
    <!-- Carrusel web-->
    <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
            <li data-target="#carouselIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../imatges/carrusel1.png" alt="Primer slide del carrusel" width="300px" height="500px">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../imatges/carrusel2.jpg" alt="Segon slide del carrusel" width="300px" height="500px">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../imatges/carrusel3.jpg" alt="Tercer slide del carrusel" width="300px" height="500px">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../imatges/carrusel4.jpg" alt="Quart slide del carrusel" width="300px" height="500px">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><a name="galeria"></a>
        </br>
        
        <h2 class="text-white text-center mb-3"><b>NUESTROS PRODUCTOS<b></h2>
        <!-- Enlace interno para ir a galeria -->
      
        <div class="col-sm-12" style="background-color:black;">
            <!-- Columna de logo -->
            <div class="row ">
                <div class="col-sm-4" style="background-color: #F1F1F1;  border: black 5px solid;" >
                <br>
                <center>
                    <a href="{{ url('/discos') }}">
                    <img src="../imatges/discos-principal.JPG" alt="imatge discs" height="350" width="350">
                    </a>
                </center>
                <hr>
                <h1 class="text-center" style="color:black; font-family:Helvetica;">DISCOS</h1>
                <p style="color:black;"> Los discos Technique de Rogue est??n fabricados con pl??stico polietileno de alta densidad (HDPE). Su di??metro exterior es de 450 mm, similar al de los discos bumper ol??mpicos est??ndar, solo que con un rango de pesos mucho m??s ligero y m??s manejable, de 0.5 a 25 kg.</p>
                <hr>
                <h2 class="text-center" style="color:black; font-family:Helvetica;">
                <br>
                <button type="button" class="btn btn-outline-danger center-block"><a style="color:black;" href="{{ url('/discos') }}">VER DISCOS</a></button>
                </h2>
                <br>
            </div>

        <!-- Columna de Wallpaper -->
            <div class="col-sm-4" style="background-color: #F1F1F1; border: black 5px solid;">
                <br>
                <center>
                <a href="{{ url('/bandas-elasticas') }}">
                <img src="../imatges/bands-principal.jpg" alt="imatge bands" height="350" width="350">
                </a>
                </center>
                <hr>
                <h1 class="text-center" style="color:black; font-family:Helvetica;">BANDAS EL??STICAS</h1>
                <br>
                <p style="color:black">Las bandas Loop de Rogue est??n disponibles en seis niveles diferentes de resistencia, lo que hace de ellas una opci??n de entrenamiento de cuerpo completo magn??fica para usuarios de cualquier tama??o y nivel de experiencia. Las cuales son rentable y muy faciles de usar. Disponemmos de diferentes bandas dependiendo cada usuario la fuerza empleada en ellas. </p>
                    <hr>
                    <h2 class="text-center"style="color:black; font-family:Helvetica;">
                    <br>
                    <button type="button"class="btn btn-outline-danger center-block"><a style="color:black;" href="{{ url('/bandas-elasticas') }}">VER BANDAS EL??STICAS</a></button>
                </h2>
                <br>
            </div>


            <!-- Columna de Edits -->
            <div class="col-sm-4" style="background-color: #F1F1F1;  border: black 5px solid;">
                <br>
                <center>
                <a href="{{ url('/barras-olimpicas') }}">
                <img src="../imatges/bars-principal.jpg"  alt="imatge bars" height="350" width="350">
                </a>
                </center>
                <hr>
                <h1 class="text-center" style="color:black; font-family:Helvetica;">BARRAS OL??MPICAS</h1>
                <p style="color:black ">Cada una de las barras Ohio de Rogue est?? hecha a m??quina y montada en Columbus (Ohio). <br> Las mangas con cojinetes en la barra Ohio garantizan un giro fiable y su dise??o de anillo de fijaci??n mantiene una estabilidad ??ptima durante cualquier r??gimen de halterofilia, desde programas de fuerza b??sicos hasta los programas m??s intensos de entrenamiento CrossFit.</p>
                    <hr>
                <h2 class="text-center" style="color:black; font-family:Helvetica;">
                    <br>
                    <button type="button" class="btn btn-outline-danger center-block"><a style="color:black;" href="{{ url('/barras-olimpicas') }}">VER BARRAS OL??MPICAS</a></button>
                </h2>
                <br>
            </div>
        </div>
    </div>

    <!-- FAQ Preguntas frecuentes-->
    <div class="col-sm-12">
        <br>
        <h1 class="text-center" style="color:white; font-family:Helvetica;">FAQ's:</h1> <br>
        <br>
        
        <h5 style="border: 0.01px solid gray;  padding:8px;">PREGUNTAS SOBRE ENV??OS</h5>
        <details style="padding: 5px; margin-bottom:5px; width:100%;">
            <summary style="font-size: 14px; cursor: pointer;">??Cu??nto tarda el env??o?</summary>
            <p style="color: white; padding-left:0.7%; font-size: 12px;">Los pedidos tardan en llegar de 3-4 dias laborables despu??s de realizar el pedido.</p>
        </details>
        <details style="padding: 5px; margin-bottom:5px; width:100%;">
            <summary style="font-size: 14px; cursor: pointer;">??Cu??nto cuesta el env??o?</summary>
            <p style="color: white; padding-left:0.7%; font-size: 12px;">El pedido ser?? gratis si supera el minimo de 30??? de compra.</p>
        </details>
        <br>
        
        <h5 style="border: 0.01px solid gray;  padding:8px;">PREGUNTAS SOBRE PAGOS</h5>
        <details style="padding: 5px;  margin-bottom:5px; width:100%;">
            <summary style="font-size: 14px; cursor: pointer;">??Como realizar un pago en la web?</summary>
            <p style="color: white; padding-left:0.7%; font-size: 12px;">Nuestros pagos se efectuan a trav??s de un sistema TPV, los cuales a la hora de pagar te saldra el importe total del pedido y a continuaci??n los datos a introducir de tu tarjeta de cr??dito.</p>
        </details>
        <details style="padding: 5px; margin-bottom:5px; width:100%;">
            <summary style="font-size: 14px; cursor: pointer;">??Los pagos son 100% seguros?</summary>
            <p style="color: white; padding-left:0.7%; font-size: 12px;">Estos pagos son seguros, los cuales se procesan a trav??s de un sistema TPV.</p>
        </details>
        <br>
        
        <h5 style="border: 0.01px solid gray;  padding:8px;">PREGUNTAS SOBRE PRODUCTOS</h5>
        <details style="padding: 5px; margin-bottom:5px; width:100%;">
            <summary style="font-size: 14px; cursor: pointer;">??Qu?? debo hacer si quiero realizar una consulta sobre algunos productos?</summary>
            <p style="color: white; padding-left:0.7%; font-size: 12px;">Si quiere relizar una consulta pongase en contacto a trav??s de la <a href="{{ url('/contacto') }}"> p??gina de contacto </a> o bien envianos un correo electr??nico a fitboxshopp@gmail.com</p>
        </details>
        <details style="padding: 5px; margin-bottom:5px; width:100%;">
            <summary style="font-size: 14px; cursor: pointer;">??C??mo puedo consultar el estado de mi pedido?</summary>
            <p style="color: white; padding-left:0.7%; font-size: 12px;">Los pedidos se pueden consultar en el apartado de  <a href="{{ url('/misPedidos') }}"> Mis Pedidos</a> .</p>
        </details>
        <br>
       
        <h5 style="border: 0.01px solid gray;  padding:8px;">PREGUNTAS SOBRE INCIDENCIAS</h5>
        <details style=" padding: 5px; margin-bottom:5px; width:100%;">
            <summary style="font-size: 14px; cursor: pointer;">??Ten??is una atenci??n al cliente?</summary>
            <p style="color: white; padding-left:0.7%; font-size: 12px;">Puede ponerse en contacto a trav??s de la <a href="{{ url('/contacto') }}"> p??gina de contacto </a>.</p>
        </details>
        <br>
      
        <h5 style="border: 0.01px solid gray; padding:8px;">PREGUNTAS SOBRE EL PROYECTO</h5>
        <details style=" padding: 5px; margin:5px; width:100%;">
            <summary style="font-size: 14px; cursor: pointer;">??Qui??n est?? detr??s del proyecto?</summary>
            <p style="color: white; padding-left:0.7%; font-size: 12px;">La infromaci??n la puede encontrar en el apartado <a href="{{ url('/sobremi') }}"> SOBRE MI </a>.</p>
        </details>
    </div>
  
    <br>
    <hr style="background: white;
    height: 1px;">
    <!-- Footer -->
    <footer >
        <div class="col-sm-12">
            <br>
            <p style="color:white;
                        font-family: 'Nunito';
                        float:left; 
                        margin-top: 0.5rem;"> ?? 2021 | Web created by Noelia Martos Garc??a with Laravel </p>
            
            <p style="color:white; 
                        float:right">
                <!-- link instagram -->
                <a href="https://www.instagram.com/fitboxshopp/">
                <i class="fab fa-instagram" style="color: white;
                                                    font-size: 40px;     
                                                    padding-right: 20px;"></i></a>

                <!-- link TWITTER -->
                <a href="https://twitter.com/">
                <i class="fab fa-twitter" style="color: white;
                                                    font-size: 40px;     
                                                    padding-right: 20px;"></i></a>
            
                <!-- link FACEBOOK -->
                <a href="https://www.facebook.com/">
                <i class="fab fa-facebook-f" style="color: white;
                                                    font-size: 40px;     
                                                    padding-right: 20px;"></i></a>
            </p>
        </div>
    </footer>
</body>
</html>

@endsection