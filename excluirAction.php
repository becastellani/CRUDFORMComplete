<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
 <title>Excluir Cliente - MYSQLI </title>
</head>
<body>
<a href="index.php" class="w3-display-topleft">
 <i class="fa fa-arrow-circle-left w3-large w3-teal w3-button w3-
xxlarge"></i>
</a>
 
<?php   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbentrevista"; 
$conexao = new mysqli($servername, $username, $password,$dbname);
if($conexao->connect_error){
    die("Connection failed: ").$conexao->connect_error;
}
$sql = "DELETE FROM cliente WHERE id = '".$_POST['txtID'] ."';";
if ($conexao->query($sql) === TRUE) {
echo '
<a href="listar.php">
<h1 class="w3-button w3-teal w3-padding w3-text-white w3-third w3-margin
w3-display-middle">Cliente Excluido com sucesso! </h1>
</a>
';
} else {
echo '
<a href="listar.php">
<h1 class="w3-button w3-teal w3-padding w3-text-white w3-third w3-margin
w3-display-middle">ERRO! </h1>
</a>
';
}
$conexao->close();

?>
</div>

</body>
</html>