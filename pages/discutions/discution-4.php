<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro Psicologíco</title>
    <!-- preload -->
    <link rel="preload" href="/school-psychological-forum/css/normalize.css" as="style">
    <link rel="stylesheet" href="/school-psychological-forum/css/normalize.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Cantata+One&family=Prata&family=Sirin+Stencil&display=swap" crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Cantata+One&family=Prata&family=Sirin+Stencil&display=swap" rel="stylesheet">

    <link rel="preload" href="/school-psychological-forum/css/style.css" as="style">
    <link rel="stylesheet" href="/school-psychological-forum/css/style.css">


</head>
<body>
    <?php
        include('../../commons/header.php');
    ?>                 

    <div class="introduction">
        <div class="container">
            <div class="row text-center">
                <h1 class="drogs-tittle">¿Que es la Deserción escolar?</h1>
            </div>
    
            <div class="container">
                <div class="row">
        
                    <div class="col-lg-8 col-md-8 col-sm-12 text-center"  >
                        <p>
                        Se considera abandono del sistema escolar por parte de los estudiantes, provocado por la combinación de factores que se generan tanto al interior del sistema como en contextos de tipo social, familiar, individual y del entorno. La tasa de deserción intra-anual solo tiene en cuenta a los alumnos que abandonan la escuela durante el año escolar, ésta se complementa con la tasa de deserción interanual que calcula aquellos que desertan al terminar el año escolar.
                        </p>      
                    </div>
        
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center" >
                        <div class="drog-img">
                            <img src="/school-psychological-forum/img/decersion.jpeg"  class="img-fluid" style="max-height: 50rem;">
                        </div>
                    </div>
        
                </div>
            </div>    
        </div>
    </div>

    <!-- Video -->
    <div class="container">
        <div class="row video-section">
            <div class="video-title">
                <h2 class="text-center">¿Qué es la decersión escolar?</h2>
            </div>
            <iframe width="350" height="550" src="https://www.youtube.com/embed/MsgFzGwOgsI?si=vd38KCd2XlhugUM6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
    

    <div class="experience">
        <div class="container text-center ">
            <form action="" method="">
    
                <h4 class="experience-tittle">Describe tu experiencia: </h4>
                
                <div class="colum">
                    <textarea name="experiencia" cols="100" rows="10"></textarea>
                </div>
                <input type="submit" value="Enviar">
            </form>
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
                            <a href="#">Link interes</a>
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