
    <?php
    require'conexion.php'; 
    $em= $_POST['email']; 
    $p= MD5( $_POST['passw']);


    $q="SELECT * FROM usuarios WHERE email = '$em' AND contra = '$p'";

    $r = mysqli_query ($con,$q); 


    if (mysqli_num_rows($r)>0) {
        session_start();
        $_SESSION ['nombre-usuarios']=$u;
        header("location: usuarios.php");
    }
    else
    {
        header("location: index.html");
        
    }

    ?>
