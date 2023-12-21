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

    <script type="text/javascript">
        function confirmar() {
            return confirm('¿Estas seguro?');
        }
    </script>


</head>
<body>

<?php
    include("../../db/connection.php");


    $sql ="SELECT * FROM student";
    $students = mysqli_query($connection, $sql);

?>

    <?php
        include("../../commons/header.php");
    ?>


    <h1>Lista de Estudiantes</h1>
    <a href="/school-psychological-forum/pages/student-crud/register.php" class="actions">Nuevo Estudiante</a><br><br>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Genero</th>
                <th>Grado</th>
                <th>Colegio</th>
                <th>Pais</th>
                <th>Ciudad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($students)) {
            ?>
            <tr>
                <td> <?php echo $row['id'] ?> </td>
                <td> <?php echo $row['names'] ?> </td>
                <td> <?php echo $row['last_names'] ?> </td>
                <td> <?php echo $row['gender'] ?> </td>
                <td> <?php echo $row['school'] ?> </td>
                <td> <?php echo $row['grade'] ?> </td>
                <td> <?php echo $row['country'] ?> </td>
                <td> <?php echo $row['city'] ?> </td>
                <td> 
                    <?php echo "<a href='/school-psychological-forum/pages/student-crud/update.php?id=".$row['id']."' class=\"actions\">Editar</a>"; ?>
                    -
                    <?php echo "<a href='/school-psychological-forum/pages/student-crud/delete.php?id=".$row['id']."' onclick='return confirmar()' class=\"actions\">Eliminar</a>"; ?>
                </td>
            
            </tr>
            <?php
                }
            ?>

        </tbody>
    </table>

    <?php 
        mysqli_close($connection) 
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