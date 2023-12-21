<?php
    include('../db/connection.php');

    if(isset($_POST['send'])) {
            echo "<script> console.log('this is a Variable:'); </script>";
            $experience_description = $_POST['text-area-experience'];
            $experience_type = $_POST['type'];

            include("../../db/connection.php");

            $sql ="INSERT INTO experience (experience_type, experience_description) 
            VALUES ('".$experience_type."', '".$experience_description."')";
            $result = mysqli_query($connection, $sql);

            echo "<script> console.log('this is a Variable:', $result); </script>";

            if($result) {
                echo "<script> console.log('this is a Variable:', $result); </script>";
            } else {
                echo " <script language='JavaScript'>
                        alert('ERROR: Los datos NO fueron almacenados');
                        </script>";
            }

        } else {
             echo "<script> console.log('this is a Variable:'); </script>";
?>
<div class="experience">
    <div class="container text-center ">
        <form action=" <?php $_SERVER['PHP_SELF'] ?> " method="post">

            <h4 class="experience-tittle">Describe tu experiencia: </h4>
            
            <div class="colum">
                <textarea name="text-area-experience" cols="100" rows="10"></textarea>
            </div>
            <input type="hidden" name="type" value="drogras">
            <input type="submit" name="send" value="Enviar" >
        </form>
    </div>
</div>

<?php
    }

?>
