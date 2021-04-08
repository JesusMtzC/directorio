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

   
?>


<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel = "stylesheet " href = "style.css">
    <title>Directorio Registro</title>
</head>
<body>
    <h1>Directorio</h1>
    <form action="server.php" method="POST" action="index.php">
    <?php
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
                echo "<section class = 'form-register'>"
                ."<input class = 'controls' type='text' value='{$consulta['nombre']}'>"
                ."<input class = 'controls' type='text' value='{$consulta['apellido']}'>"            
                ."<input class = 'controls' type='email' value='{$consulta['correo']}' name='correo' id='correo' placeholder='Ingrese su correo'>"
                ."<input class = 'controls' type='tel' value='{$consulta['tel']}' ame='telefono' id='telefono' placeholder='Ingrese su telefono'>"
                ."<input class = 'controls' type='tel' value='{$consulta['cel']}' name='celular' id='celular' placeholder='Ingrese su celular'>"
                ."<input class = 'controls' type='text' value='{$consulta['facebook']}' name='facebook' id='facebook' placeholder='Ingrese su facebook'>"
                ."<input class = 'controls' type='text' value='{$consulta['twitter']}' name='twitter' id='twitter' placeholder='Ingrese su twitter'>"
                ."<input class = 'controls' type='text' value='{$consulta['insta']}' name='instagram' id='instagram' placeholder='Ingrese su instagram'>"
                ."</section>";
                $existe++;
              }
              if($existe>0) { echo "<form action='index.php' method='POST' action='index.php'>
                  <section class = 'form-register'>
                      <input  class = 'botons' type='submit' name='save-task' value = 'Regresar' >
                  </section>
              </form>";}
              if($existe==0) {echo "<h1>¡No existe registro!</h1><br><form action='index.php' method='POST' action='index.php'>
                <section class = 'form-register'>
                    <input  class = 'botons' type='submit' name='save-task' value = 'Regresar' >
                </section>
            </form>";}
      
            }
      

    }

    ?>
        


    </form>

    <table>
        <thead><
            
    </table>
    
</body>
</html>