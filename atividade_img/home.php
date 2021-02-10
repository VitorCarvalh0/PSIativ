<!DOCTYPE html>
<?php 
require_once 'db_connect.php';
session_start();

if(!isset($_SESSION['logado'])):
    header("Location: index.php");
endif;

$id = $_SESSION['id_pessoas_cadastradas'];
$sql = "SELECT * FROM pessoas_cadastradas WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1> Página restrita </h1><br>
    <h1> <?= $dados['nome']; ?> </h1>

    <a href="minhapagina.php">Minha Página</a><br>
    
    <a href="logout.php">Sair</a>
    
</body>
</html>