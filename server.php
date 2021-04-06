<?php
  include("conexion.php");
  if (isset($_POST['save-task'])){
      $nombre=$_POST['nombre'];
      $apellido=$_POST['apellido'];
      $correo=$_POST['correo'];
      $telefono=$_POST['telefono'];
      $celular=$_POST['celular'];
      $facebook=$_POST['facebook'];
      $twitter=$_POST['twitter'];
      $instagram=$_POST['instagram'];

     //echo"$nombre $apellido $correo $telefono $celular $facebook $twitter $instagram";
     $query = "INSERT INTO directorio(nombre, apellido, correo, tel, cel, facebook, twitter, insta) values('$nombre','$apellido','$correo','$telefono','$celular','$facebook','$twitter','$instagram')";
     $result=mysqli_query($conn,$query);//cadena de conexion y consulta
     if (!$result) {
       die("query failed"); //terminar aplicacion 
      }
      echo "Guardado en BD";
    }

?>
