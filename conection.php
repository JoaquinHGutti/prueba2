<?php 
    $conection = mysqli_connect("localhost","root","","jardin_magico");

    if($conection->connect_errno){
        die("La conexion ha fallado" . $conection->connect_errno);
    }
    else{
        echo("askldlkajsd");
    }
?>