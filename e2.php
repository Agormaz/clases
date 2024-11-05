<?php
$color = "";
if (isset($_COOKIE['color'])){
    $color =$_COOKIE['color'];
}
//setcookie("Color fondo" , "tiempo cacaba" , time()+(7*24*60*60));
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $color = htmlspecialchars($_POST["color"]);
}

setcookie("color", $color, time()+3600);     
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/simpledotcss/simple.min.css">
    <title>e2colorFondo</title>
    <!-- Cambiamos el color de fondo y creamos la cookie -->
    <style>
        body {
            background-color: <?=$color;?>;
        }
    </style>

</head>

<body>
    <h1> color de fondo</h1>
    <form action="" method="post">
        <label for="">selecciona un color</label>
        <input type="color" name="color">
        <button type="submit">Cambiar</button>
    </form>

</body>

</html>