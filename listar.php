<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
 <title>Listagem de Clientes</title>
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

 echo '
 <div class="w3-paddingw3-content w3-half w3-displaytopmiddle w3-margin">
 <h1 class="w3-center w3-teal w3-round-large w3-
margin">Listagem de Clientes</h1>
 <table class="w3-table-all w3-centered">
 <thead>
 <tr>
<td>ID</td>
<td>NOME</td>
<td>CPF</td>
<td>RAZÃO SOCIAL</td>
<td>CNPJ</td>
<td>Cidade</td>
<td>Estado</td>
<td>Data Cadastro</td>
<td></td>
<td>TIPO</td>
<td>EXCLUIR</td>
<td>ATUALIZAR</td>
</tr>

 </thead>
';

$sql = "SELECT * FROM cliente" ;
 $resultado = $conexao->query($sql);
 if($resultado != null)
    foreach($resultado as $linha) { 
    echo '<tr>';
        echo '<td>'.$linha['id'].'</td>';
        echo '<td>'.$linha['nome_cliente'].'</td>';
        echo '<td>'.$linha['cpf'].'</td>';
        echo '<td>'.$linha['razao_social'].'</td>'; 
        echo '<td>'.$linha['cnpj'].'</td>'; 
        echo '<td>'.$linha['cidade'].'</td>'; 
        echo '<td>'.$linha['estado'].'</td>'; 
        echo'<td>'.$linha['createdAt'].'<td>';
        echo '<td>'.$linha['despesa_receita'].'</td>'; 
        echo '<td><a href="excluir.php?id='.$linha['id'].
        '&NOME='.$linha['nome_cliente'].
        '&CPF='.$linha['cpf'].
        '&RazaoSocial='.$linha['razao_social'].
        '&CNPJ='.$linha['cnpj'].
        '&Cidade='.$linha['cidade'].
        '&Estado='.$linha['estado'].
        '&Criado='.$linha['createdAt'].
        '&Tipo='.$linha['despesa_receita'].'"


><i class="fas fa-trash" style="font-size:24px"></i></a></td></td>';

 echo '<td><a href="atualizar.php?id='.$linha['id'].
 '&NOME='.$linha['nome_cliente'].
 '&CPF='.$linha['cpf'].
 '&RazaoSocial='.$linha['razao_social'].
 '&CNPJ='.$linha['cnpj'].
 '&Cidade='.$linha['cidade'].
 '&Estado='.$linha['estado'].
 '&Criado='.$linha['createdAt'].
 '&Tipo='.$linha['despesa_receita'].'"
 ><i class="fas fa-pen" style="font-size:24px"></i></a></td></td>'; 


    echo '</tr>';
    }
    echo'
    </table>
    </div>'

 ?>

</body>
</html>