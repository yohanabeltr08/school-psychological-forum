<?php
    include("../../db/connection.php");
    $id = $_GET['id'];

    $sql_delete = "DELETE FROM student WHERE id ='".$id."'";
    $result = mysqli_query($connection, $sql_delete);

    if($result) {
        echo " <script language='JavaScript'>
            alert('Los datos fueron eliminados exitosamente');
            location.assign('student-list.php'); 
            </script>";
    } else {
        echo " <script language='JavaScript'>
            alert('ERROR al eliminar los datos');
            location.assign('student-list.php'); 
            </script>";
    }
?>