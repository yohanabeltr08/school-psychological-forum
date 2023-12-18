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
    <link rel="stylesheet" href="/school-psychological-forum/css/style-crud.css">


</head>
<body>
    <?php
        if(isset($_POST['send'])) {
            $names = $_POST['names'];
            $last_names = $_POST['last_names'];
            $gender = $_POST['gender'];
            $grade = $_POST['grade'];
            $school = $_POST['school'];
            $country = $_POST['country'];
            $city = $_POST['city'];

            include("/school-psychological-forum/db/connection.php");

            $sql ="INSERT INTO student (names, last_names, gender, grade, school, country, city) 
            VALUES ('".$names."', '".$last_names."', '".$gender."', '".$grade."', '".$school."', '".$country."', '".$city."')";
            $result = mysqli_query($connection, $sql);

            if($result) {
                echo " <script language='JavaScript'>
                        alert('Los datos fueron almacenados exitosamente');
                        location.assign('student-list.php'); 
                        </script>";
            } else {
                echo " <script language='JavaScript'>
                        alert('ERROR: Los datos NO fueron almacenados');
                        location.assign('student-list.php'); 
                        </script>";
            }

        } else {        
    ?>

    <?php
        include('../../commons/header.php');
    ?>

    <div class="title-crud">
        <h1> Agregar Nuevo Estudiante </h1>
    </div>
    
    <div class="student-form">
        <form action=" <?php $_SERVER['PHP_SELF'] ?> " method="post">
            <label>Nombre</label>
            <input type="text" name="names"> <br>

            <label>Apellido</label>
            <input type="text" name="last_names"> <br>

            <label>Genero</label>
            <input type="text" name="gender"> <br>

            <label>Grado</label>
            <input type="text" name="grade"> <br>

            <label>Colegio</label>
            <input type="text" name="school"> <br>

            <label>Pais</label>
            <input type="text" name="country"> <br>

            <label>Ciudad</label>
            <input type="text" name="city"> <br>

            <input type="submit" name="send" value="AGREGAR">
            <a href="/school-psychological-forum/pages/student-crud/student-list.php" class="actions">Regresar</a>

        </form>
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


    <?php            
        }
    ?>

</body> 
</html>