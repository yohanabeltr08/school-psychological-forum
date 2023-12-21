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
                <h1 class="drogs-tittle">¿Que son las Conductas negativas?</h1>
            </div>
    
            <div class="container">
                <div class="row">
        
                    <div class="col-lg-8 col-md-8 col-sm-12 text-center"  >
                        <p>
                        El sistema educativo en general se enfrenta a problemáticas múltiples y diversas. Hay algunas de ellas que son comunes en las aulas, las instituciones educativas e, incluso, en los ambientes de aprendizaje familiares. Es por eso que una de las tareas más abrumadoras para maestros y personal docente es la disciplina. Aquí se incluye el manejo de los alumnos con mala conducta.
                        La educación infantil y los demás niveles educativos, están necesariamente ligados a las situaciones contextuales de sus estudiantes. Por tanto, dicho contexto será determinante al momento de construir un clima escolar positivo y beneficioso. Esto tanto para el alumno como para los maestros.

                        Si bien es cierto que las consecuencias de muchos factores externos se resuelven eficientemente en las aulas, otras, en cambio, terminan en conductas disruptivas que impiden el normal funcionamiento de las clases. La vulnerabilidad social y económica, la falta de infraestructura adecuada, los problemas familiares y de comunidad son ejemplos de situaciones que desencadenan en un mal comportamiento, muchas veces agresivo y desordenado.
                        </p>      
                    </div>
        
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center" >
                        <div class="drog-img">
                            <img src="/school-psychological-forum/img/behiavor.jpeg"  class="img-fluid" style="max-height: 50rem;">
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
                <h2 class="text-center">Conductas positivas o negativas para niños</h2>
            </div>
            <iframe width="350" height="550" src="https://www.youtube.com/embed/BKQdt-yAQ2Y?si=voK5FJPUQZQFTVIL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
    

    <?php
    include('../../db/connection.php');

    if(isset($_POST['send'])) {
            $description = $_POST['text-area-experience'];
            $experience_type = $_POST['type'];

            $sql ="INSERT INTO experience (experience_type, experience_description) 
            VALUES ('".$experience_type."', '".$description."')";
            $result = mysqli_query($connection, $sql);

            if($result) {
                echo "<meta http-equiv='refresh' content='0'>";
            } else {
                echo " <script language='JavaScript'>
                        alert('ERROR: Los datos NO fueron almacenados');
                        </script>";
            }

        } else {
    ?>
        <div class="experience">
            <div class="container text-center ">
                <form action=" <?php $_SERVER['PHP_SELF'] ?> " method="post">

                    <h4 class="experience-tittle">Describe tu experiencia: </h4>
                    
                    <div class="colum">
                        <textarea name="text-area-experience" cols="100" rows="10"></textarea>
                    </div>
                    <input type="hidden" name="type" value="conductas negativas">
                    <input type="submit" value="Enviar" name="send">
                </form>
            </div>
        </div>


    <?php
            $sql ="SELECT * FROM experience";
            $experiences = mysqli_query($connection, $sql);

            while ($row = mysqli_fetch_assoc($experiences)) {
                if ($row["experience_type"] == "conductas negativas") {
                    echo "<p><strong> Anonimo:</strong> " . $row["experience_description"] . "</p>";
                }
            }
            

            mysqli_close($connection);

        }

    ?>
       

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