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
    <title>Imagem</title>
    <style>
     img{
        width: 20%;
     }
    </style>
</head>
<body>
    <div>
    <img src="https://cdn1.i-scmp.com/sites/default/files/styles/768x768/public/images/methode/2019/01/25/c5547b00-2069-11e9-9b66-f8d7b487d426_image_hires_153953.JPG?itok=5LEeWw8o&v=1548402000" > 
    <p>“Há uma passagem que aprendi de cor, parece apropriada para esta situação: Ezequiel 25.17.
    O caminho do homem justo está em toda parte, entre as iniquidades do egoísta e a tirania do mal.
    Bem-aventurado aquele que, em nome da caridade e da boa vontade, pastorear os fracos do vale das trevas,
    ele é o verdadeiro guardião de seu irmão e o descobridor dos filhos perdidos.
    E irei punir com grande vingança, raiva furiosa contra aqueles que pretendem envenenar e destruir meus irmãos.
     Você saberá meu nome quando minha vingança cair sobre você. <br> - Jules Winnfield</p>
    </div>
    <a href="home.php">Ir para página inicial</a> <br>
    <a href="logout.php">Sair</a>
</body>
</html>