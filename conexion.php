<?php

    $conn = mysqli_connect("localhost","root","", "seguridad");
    if(!$conn){
        die("imposible conectarse: ".mysqli_error($conn));
    }
    if (mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
    
?>
