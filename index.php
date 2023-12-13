<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro Psicologíco</title>
    <!-- preload -->
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Cantata+One&family=Prata&family=Sirin+Stencil&display=swap" crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Cantata+One&family=Prata&family=Sirin+Stencil&display=swap" rel="stylesheet">

    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
    <header class="header">
        <div class="header__fondo">
            <div class="barra contenedor">

                <!-- Barra navegacion -->
                <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="index.php">El Rostro De La Educación</a>

                      <!-- Menu hamburguesa responsive -->
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                                </li>

                                <!-- Elemento Desplegable -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Discusiones
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li> <a class="dropdown-item" href="pages/discution-1.php">Consumo de sustancias</a> </li>

                                        <li class="nav-item dropdown"> 
                                            <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                                                Violencia
                                            </a> 
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#"> asdfsdf </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li> <a class="dropdown-item" href="#">Bajo rendimiento</a> </li>

                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="pages/register.php">Registrarse</a>
                                </li>
                                   
                            </ul>                        
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Carrusel fotos -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/img22.jpeg" class="d-block w-100" alt="opinion">
                <div class="carousel-caption d-none d-md-block">
                    <h3>HOLA</h3>
                    <h5>¡Queremos darte la bienvenida a El Rostro De La Educación!</h5>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/Respect.jpg" class="d-block w-100" alt="respeto">
                <div class="carousel-caption d-none d-md-block">
                    <h3>HOLA</h3>
                    <h5>¡Queremos darte la bienvenida a El Rostro De La Educación!</h5>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/img.11.jpeg" class="d-block w-100" alt="Trabajo en equipo">
                <div class="carousel-caption d-none d-md-block">
                    <h3>HOLA</h3>
                    <h5>¡Queremos darte la bienvenida a El Rostro De La Educación!</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="index-info">
        <div class="container">
            <div class="row">
    
                <div class="col-lg-6 col-md-8 col-sm-12 text-center"  >
                    <p> Estamos emocionados de que te encuentres en este espacio dedicado a abordar las problemáticas que afectan a nuestros colegios. 
                        En donde nosotros creemos en la importancia de crear un diálogo abierto y constructivo sobre los desafíos que enfrentamos en el ámbito educativo.
                        Sabemos que cada uno de nosotros tiene experiencias únicas y perspectivas valiosas para compartir. Aquí, nos comprometemos a fomentar un ambiente de respeto mutuo, donde cada voz cuenta y cada opinión es valorada.
                        Nuestro objetivo es no solo destacar las dificultades que enfrentamos, sino también encontrar soluciones y trabajar juntos para construir un entorno educativo más positivo y enriquecedor. Queremos ser un espacio donde podamos aprender unos de otros y colaborar para crear un cambio significativo.
            
                        Así que, únete a la conversación, comparte tus experiencias, y contribuye a la construcción de un futuro educativo más brillante. Juntos, podemos marcar la diferencia.
                        ¡Gracias por ser parte de esta Comunidad!
                    </p>      
                </div>
    

                <div class="col-lg-6 col-md-4 col-sm-12 text-center" >
                    <div class="img-info">
                        <img src="img/ImagEdu.jpg"  class="img-fluid" style="max-height: 22rem;">  
                    </div>  
                </div>
    
            </div>
        </div>
    </div>
    


    <!-- Video -->
    <div class="container">
        <div class="row video-section">
            <div class="video-title">
                <h2 class="text-center">¿Que pasa con la educacion actual?</h2>
            </div>
            
                <iframe width="560" height="315" src="https://www.youtube.com/embed/jpyOQBver-M?si=kKslHxAM5h_sOtdQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>


    <!-- Footer -->
    <footer class="footer bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Información del Creador</h4>
                    <p>Yohana Beltran <br> ybeltr18@ibero.edu.co <br> Estudiante de Psicología </p>
                </div>

                <div class="col-md-4">
                    <h4>Redes Sociales</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            
                <div class="col-md-4">
                    <h4>Links de Interés</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://www.youtube.com/watch?v=jpyOQBver-M&ab_channel=vidasegunrichie">Video: EL PROBLEMA DE LA EDUCACIÓN ACTUAL</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>




    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 

</body> 
</html>