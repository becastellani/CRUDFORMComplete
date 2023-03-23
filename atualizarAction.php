<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
 <title>Editar Cliente </title>
</head>
<body>
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle" >
 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "dbentrevista";
 $conexao = new mysqli($servername, $username, $password, $dbname);
 if ($conexao->connect_error) {
 die("Connection failed: " . $conexao->connect_error);
 } else{
    echo '';
 }

 $sql = "UPDATE cliente SET nome_cliente='".$_POST['txtNome']."', cpf='".$_POST['txtCpf']."',razao_social='".$_POST['txtRazao']."',cnpj='".$_POST['txtCnpj']."',cidade='".$_POST['txtCidade']."',estado='".$_POST['txtEstado']."',despesa_receita='".$_POST['tipoD']."' WHERE id =". $_POST['txtID'].";";
 
  if ($conexao->query($sql) === TRUE) {
  echo '
  <a href="listar.php">
  <h1 lass="w3-button w3-teal">Cliente Atualizado com sucesso! </h1>
  </a>
  ';
  $id = mysqli_insert_id($conexao);
 
  } else {
  echo '
  <a href="listar.php">
  <h1 class="w3-button w3-teal">Erro ao atualizar cliente! </h1>
  </a>
  ';
  }
  $conexao->close(); 
 


 ?>
 </div>

</body>
</html>

