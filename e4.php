<?php
$producto="";
$carrito=[];
$errores=[];
if (isset($_COOKIE['producto'])){
    $producto =$_COOKIE['producto'];
    //si ya existe la cookie la pintamos
    echo("<ul>");
        foreach($carrito as $producto){
            echo("<li>
            $producto
            </li>");
        }
    }else{
    echo("no ha entrado");
}
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $producto=htmlspecialchars(trim($_POST['producto']));

    if (empty($producto) || !isset($producto)) {
       
       setcookie("producto", $producto, time()+3600);   
       
    }else{
        $errores=("Debe añadir un producro al carrito");
     
    }
}
//header("location: e4.php");
//exit;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/simpledotcss/simple.min.css">
    <title>e4</title>
    <h1>Carrito con cookies</h1>
</head>
<body>
    <h2>Añadir producto al carrrito</h2>
    <form action="" method="post">
    <input type="text" name="producto">
    <? echo($errores["producto"])?>
    <button type="submit" name="producto">Añandir</button>

    </form>
  
</body>
<footer>A.Gormaz</footer>
</html>