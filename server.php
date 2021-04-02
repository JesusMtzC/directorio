<?php
    include("conexion.php");

    //se reciben datos
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $celular = $_POST['celular'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];

    echo "$nombre $apellido $correo $telefono $celular $facebook $twitter $instagram";

    $sql = "INSERT INTO directorio('nombre', 'apellido', 'tel', 'cel', 'facebook', 'twitter', 'insta)' values 
    ('ricardo', 'valencia','correo', 'telefono', 'celular', 'facebook', 'twitter', 'instagram')";
    echo $sql;
    echo "Hola"
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

?>
