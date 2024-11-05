<?php
$nombre = "";
if (isset($_COOKIE['nombre'])){
    $nombre =$_COOKIE['nombre'];
}
//setcookie("Color fondo" , "tiempo cacaba" , time()+(7*24*60*60));
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
  
    
}
setcookie("nombre", $nombre, time()+3600);     
if (isset($_COOKIE['nombre'])){
   echo("Bienvenido".$nombre);
}else{
    echo("no hay nada");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/simpledotcss/simple.min.css">
    <title>e3Bienvenida</title>
</head>
<body>
    <h1>Bienvenida</h1>
    <form action="" method="post">
        <label for="nombre">nombre</label>
        <input type="text" name="nombre">
        <button type="submit"name="nombre">Enviar</button>
    </form>
    <?php

    ?>
</body>
<footer>A.Gormaz</footer>
</html>