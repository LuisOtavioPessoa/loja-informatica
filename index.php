<?php
include_once("topo.php");
include_once("menu.php");

if(empty($_SERVER["QUERY_STRING"])){
    $var = "conteudo.php";
    include_once("$var");

}else {
    $pg = $_GET['pg'];//pg=páginas
    include_once("$pg.php");

}
include_once("rodape.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Informática</title>
    
</head>
<body>
    




</body>
</html>

