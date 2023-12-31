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
                <h1 class="drogs-tittle">¿Que es el consumo de sustancias?</h1>
            </div>
    
            <div class="container">
                <div class="row">
        
                    <div class="col-lg-8 col-md-8 col-sm-12 text-center"  >
                        <p class="discution-text">Las sustancias psicoactivas son diversos  compuestos naturales o sintéticos, que actúan sobre el sistema nervioso generando alteraciones en las funciones que regulan pensamientos, emociones y el comportamiento.
    
                            Existen regulaciones para el control y fiscalización del uso de estas sustancias, ya sea para uso recreativo, como el alcohol o el tabaco;  para uso farmacológico, como los tranquilizantes o analgésicos opiáceos, o  de uso general, como los solventes industriales. Hay un grupo cuyo uso es considerado ilícito y solo autorizado con fines médicos o de investigación, como el caso de la cocaína y sus derivados. El uso de sustancias psicoactivas siempre implica un grado de riesgo  de sufrir consecuencias adversas sobre distintos órganos y sistemas, las cuales pueden darse en el corto plazo, como en el caso de la intoxicación, la cual incrementa el riesgo de lesiones por accidentes o agresión, así como  conductas sexuales en condiciones inseguras. El uso repetido y  prolongado en el tiempo de estas sustancias, favorece el desarrollo de trastornos por dependencia, que son trastornos crónicos y recurrentes, caracterizados por necesidad intensa de la sustancia y pérdida de la capacidad de controlar su consumo, a pesar de consecuencias adversas en el estado de salud o en el funcionamiento interpersonal, familiar, académico, laboral o legal.
                        </p>      
                    </div>
        
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center" >
                        <div class="drog-img">
                            <img src="/school-psychological-forum/img/drog.webp"  class="img-fluid" style="max-height: 50rem;">
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
                <h2 class="text-center">Prevención de Consumo de Drogas</h2>
            </div>
            <iframe width="350" height="550" src="https://www.youtube.com/embed/JndZ3y-KVLQ?si=HgktSoYnSUMM4fOs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                    <input type="hidden" name="type" value="drogras">
                    <input type="submit" value="Enviar" name="send">
                </form>
            </div>
        </div>


    <?php
            $sql ="SELECT * FROM experience";
            $experiences = mysqli_query($connection, $sql);

            while ($row = mysqli_fetch_assoc($experiences)) {
                if ($row["experience_type"] == "drogras") {
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