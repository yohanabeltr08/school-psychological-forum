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
                <h1 class="drogs-tittle">¿Que es la Violencia?</h1>
            </div>
    
            <div class="container">
                <div class="row">
        
                    <div class="col-lg-8 col-md-8 col-sm-12 text-center"  >
                        <p>
                        La violencia escolar es un fenómeno muy extendido, se existe en todos los países y afecta a un gran número de niños y adolescentes. Se refiere a todas las formas de violencia que tienen lugar dentro o fuera de las aulas, en los alrededores de las escuelas, en el camino hacia o desde la escuela, así como en línea y otros entornos digitales.

La violencia escolar la padecen principalmente los educandos, y puede ser perpetrada por otros educandos, docentes u otras personas de la comunidad escolar.

Cada mes, uno de cada tres educandos sufre acoso escolar en todo el mundo. Más del 36% de los educandos se ve afectado por una riña física con algún compañero y casi uno de cada tres ha sido agredido físicamente al menos una vez al año. El ciberacoso es un problema creciente que afecta a uno de cada diez niños. Aunque es difícil recopilar datos sobre la violencia sexual o de género en la escuela, los datos mundiales demuestran que una de cada cuatro mujeres jóvenes ya ha sufrido violencia por parte de su pareja antes de cumplir los 24 años, lo que indica la presencia de violencia de género o sexual, entre los niños en edad escolar.
                        </p>      
                    </div>
        
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center" >
                        <div class="drog-img">
                            <img src="/school-psychological-forum/img/violence.jpeg"  class="img-fluid" style="max-height: 50rem;">
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
                <h2 class="text-center">Miedo en el primer día de clases</h2>
            </div>
            <iframe width="350" height="550" src="https://www.youtube.com/embed/6pTh8BYVmpQ?si=Sd6WOevb34mQb678" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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