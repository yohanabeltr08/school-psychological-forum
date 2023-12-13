<?php 
    include("../db/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <!-- preload -->
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Cantata+One&family=Prata&family=Sirin+Stencil&display=swap" crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Cantata+One&family=Prata&family=Sirin+Stencil&display=swap" rel="stylesheet">

    <link rel="preload" href="../css/style.css" as="style">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style-crud.css">


</head>
<body>

    <?php
        if(isset($_POST['send'])) {

            $id = $_POST['id'];
            $names = $_POST['names'];
            $last_names = $_POST['last_names'];
            $gender = $_POST['gender'];
            $grade = $_POST['grade'];
            $school = $_POST['school'];
            $country = $_POST['country'];
            $city = $_POST['city'];

            $sql_update = "UPDATE student SET names = '".$names."', last_names ='".$last_names."', gender ='".$gender."', grade ='".$grade."', school ='".$school."', country ='".$country."', city ='".$city."' WHERE id = '".$id."'";

            $result = mysqli_query($connection, $sql_update);

            if($result) {
                echo " <script language='JavaScript'>
                        alert('Los datos fueron actualizados exitosamente');
                        location.assign('student-list.php'); 
                        </script>";
            } else {
                echo " <script language='JavaScript'>
                        alert('ERROR: Los datos NO fueron actualizados');
                        location.assign('student-list.php'); 
                        </script>";
            }

        } else {   
            $id = $_GET['id'];
            $sql = "SELECT * FROM student WHERE id = '".$id."' ";
            $student = mysqli_query($connection, $sql);
            $row = mysqli_fetch_assoc($student);

            $names = $row["names"];
            $last_names = $row["last_names"];
            $gender = $row["gender"];
            $grade = $row["grade"];
            $school = $row["school"];
            $country = $row["country"];
            $city = $row["city"];

            mysqli_close($connection);
    ?>

    <header class="header">
        <div class="header__fondo">
            <div class="barra contenedor">

                <!-- Barra navegacion -->
                <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="../index.php">El Rostro De La Educación</a>

                      <!-- Menu hamburguesa responsive -->
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
                                </li>

                                <!-- Elemento Desplegable -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Discusiones
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li> <a class="dropdown-item" href="discution-1.php">Consumo de sustancias</a> </li>

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
                                    <a class="nav-link active" aria-current="page" href="register.php">Registrarse</a>
                                </li>
                                   
                            </ul>                        
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div class="title-crud">
        <h1> Actualizar Estudiante </h1>
    </div>
    
    <div class="student-form">
        <form action=" <?php $_SERVER['PHP_SELF'] ?> " method="post">
            <label>Nombre</label>
            <input type="text" name="names" value="<?php echo $names?>"> <br>

            <label>Apellido</label>
            <input type="text" name="last_names" value="<?php echo $last_names?>"> <br>

            <label>Genero</label>
            <input type="text" name="gender" value="<?php echo $gender?>"> <br>

            <label>Grado</label>
            <input type="text" name="grade" value="<?php echo $grade?>"> <br>

            <label>Colegio</label>
            <input type="text" name="school" value="<?php echo $school?>"> <br>

            <label>Pais</label>
            <input type="text" name="country" value="<?php echo $country?>"> <br>

            <label>Ciudad</label>
            <input type="text" name="city" value="<?php echo $city?>"> <br>

            <input type="hidden" name="id" value="<?php echo $id?>">

            <input type="submit" name="send" value="ACTUALIZAR">
            <a href="student-list.php" class="actions">Regresar</a>

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