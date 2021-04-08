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
        <section class = "form-register">
            <input class = "controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">
            <input class = "controls" type="text" name="apellido" id="apellido" placeholder="Ingrese sus apellidos">
            <input class = "controls" type="email" name="correo" id="correo" placeholder="Ingrese su correo">
            <input class = "controls" type="tel" name="telefono" id="telefono" placeholder="Ingrese su telefono">
            <input class = "controls" type="tel" name="celular" id="celular" placeholder="Ingrese su celular">
            <input class = "controls" type="text" name="facebook" id="facebook" placeholder="Ingrese su facebook">
            <input class = "controls" type="text" name="twitter" id="twitter" placeholder="Ingrese su twitter">
            <input class = "controls" type="text" name="instagram" id="instagram" placeholder="Ingrese su instagram">
            <input  class = "botons" type="submit" name="save-task" value = "Enviar " >
            <input  class = "botons" type="submit" name="consul" value = "Consultar " >
        </section>


    </form>

    <table>
        <thead><
            
    </table>
    
</body>
</html>