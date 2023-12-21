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
                <h1 class="drogs-tittle">¿Que son los Problemas emocionales?</h1>
            </div>
    
            <div class="container">
                <div class="row">
        
                    <div class="col-lg-8 col-md-8 col-sm-12 text-center"  >
                        <p>
                        La psicología ha explorado exhaustivamente el tema de la capacidad intelectual (CI) y de las aptitudes (disposición) en relación con el aprendizaje; pero cosas tan relevantes como las actitudes, la motivación y las expectativas habían sido menos atendidas o relegadas a un segundo término. Por el contrario, en este momento juegan un matiz prioritario, porque los problemas que se detectan en la escuela tienen un marcado cariz emocional y sólo combinando el Cociente intelectual con el Cociente Emocional se pueden alcanzar buenos resultados.

El conocimiento de las emociones infantiles es esencial para poder manejar el mundo de los niños. Los niños nacen con afectos positivos y negativos alveolados en las tres emociones básicas: miedo, alegría e ira. Poco a poco, van construyendo las otras más complejas, de modo que a los siete años el mundo emocional del niño es comparable con el del adulto en lo que se refiere a conocimiento y regulación; sin embargo, experimenta la emoción con mayor intensidad. El paralelismo entre emoción y motivación es tal que muchos autores las identifican, aunque la motivación puede tener una gama más variada e intelectual.
                        </p>      
                    </div>
        
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center" >
                        <div class="drog-img">
                            <img src="/school-psychological-forum/img/emotional-issues.jpeg"  class="img-fluid" style="max-height: 50rem;">
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
                <h2 class="text-center">Habilidades socio emocionales</h2>
            </div>
            <iframe width="350" height="550" src="https://www.youtube.com/embed/KvZ-cdd37mw?si=_UKWppOwaju79IdD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                    <input type="hidden" name="type" value="problema emocional">
                    <input type="submit" value="Enviar" name="send">
                </form>
            </div>
        </div>


    <?php
            $sql ="SELECT * FROM experience";
            $experiences = mysqli_query($connection, $sql);

            while ($row = mysqli_fetch_assoc($experiences)) {
                if ($row["experience_type"] == "problema emocional") {
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