<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cadastro Clientes</title>
</head>
<body>
    
<?php   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbentrevista"; 

// Cria a conexão
$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

$tipo_pessoa = $_POST['tipo_pessoa'];

if ($_POST['tipo_pessoa'] === "pessoa_fisica") {
    $sql = "INSERT INTO cliente (nome_cliente, cpf, cidade, estado,despesa_receita, logo)
 VALUES ('".$_POST['txtNome']."', '".$_POST['txtCpf']."', '".$_POST
['txtCidade']."','".$_POST['txtEstado']."','".$_POST['tipoD']."','".$_POST['logo']."')";

if ($conexao->query($sql) === TRUE) {
    echo '
    <a href="index.php">
    <h1 class="w3-button w3-teal w3-padding w3-text-white w3-third w3-margin
    w3-display-middle">Cliente Salvo com sucesso! </h1>
    </a>
    ';
   
    } else {
    echo '
    <a href="index.php">
    <h1 class="w3-button w3-teal w3-padding w3-text-white w3-third w3-margin
    w3-display-middle">Erro ao salvar Cliente! </h1>
    </a>
    ';
    } 
} 
else if ($_POST['tipo_pessoa'] === "pessoa_juridica") {
    $sql = "INSERT INTO cliente (razao_social, cnpj, cidade, estado,despesa_receita, logo)
    VALUES ('".$_POST['txtRazao']."', '".$_POST['txtCnpj']."', '".$_POST
   ['txtCidadeJ']."','".$_POST['txtEstadoJ']."','".$_POST['tipoD']."','".$_POST['logo']."')";

   if ($conexao->query($sql) === TRUE) {
    echo '
    <a href="index.php">
    <h1 class="w3-button w3-teal">Cliente Salvo com sucesso! </h1>
    </a>
    ';
   
    } else {
    echo '
    <a href="index.php">
    <h1 class="w3-button w3-teal">Erro ao salvar Cliente! </h1>
    </a>
    ';
    } 
}

 $conexao->close();


?>