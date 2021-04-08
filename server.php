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
      //echo "Guardado en BD";
      header("Location: index.php");
      echo "se aguardo correctamente";
}

    if (isset($_POST['consul'])) {
      include("conexion.php");
       
      $nombre =$_POST['nombre'];
      $existe=0;

      if ($nombre=="") {
        echo "El Nombre es un campo obligatorio";
      }
      else {
                $resultados=mysqli_query($conn," SELECT * FROM directorio WHERE nombre = '$nombre'");
              while ($consulta = mysqli_fetch_array($resultados) ) 
              {
                echo $consulta['nombre']."<br>";
                echo $consulta['apellido']."<br>";
                echo $consulta['correo']."<br>";
                echo $consulta['tel']."<br>";
                echo $consulta['cel']."<br>";
                echo $consulta['facebook']."<br>";
                echo $consulta['twitter']."<br>";
                echo $consulta['insta']."<br>";
                $existe++;
              }
              if($existe==0) {echo "El registro no existe";}
      
            }
      

    }

?>
