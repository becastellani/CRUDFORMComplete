<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
 <title>Excluir Cliente</title>
</head>
<body>
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-displaymiddle">

 <h1 class="w3-center w3-teal w3-round-large w3-
margin">Excluir - ID: <?php echo " ".$_GET['id']?> </h1>

 <form action="excluirAction.php" method='post'>
 <input name="txtID" type="hidden" value="<?php echo $_GET['id']?>">
 <br>
 <label>Nome</label>
 <input name="txtNome" disabled value="<?php echo $_GET['NOME']?>">
 <br>
 <label>CPF</label>
 <input name="txtCpf"disabled value="<?php echo $_GET['CPF']?>">
 <br>
 <label>Razão Social</label>
 <input name="txtRazao"  disabled value="<?php echo $_GET['RazaoSocial']?>">
 <br>

 <label>CNPJ</label>
 <input name="txtCnpj" disabled value="<?php echo $_GET['CNPJ']?>">
 <br>
 <label>Cidade</label>
 <input name="txtCidade" disabled value="<?php echo $_GET['Cidade']?>">
 <br>
 <label>Estado</label>
 <input name="txtEstado"  disabled value="<?php echo $_GET['Estado']?>">
 <br>


 <label> 
<input type="radio" id="tipoD" name="tipoD" value="Despesa" disabled <?php if($_GET['Tipo'] == 'Despesa') echo 'checked'; ?>>Despesa
</label>
      
<label> 
<input type="radio"  id="tipoD" name="tipoD" value="Receita" disabled <?php if($_GET['Tipo'] == 'Receita') echo 'checked'; ?>>Receita
</label><br>


 <button name="btnExcluir" class="w3-button w3-teal w3-roundlarge w3-right w3-middle "  style="font-weight:bold;"  >
 <i class="w3-xxlarge fa fa-check " ></i> Confirmar Exclusão
 </button>
 
 <a href="listar.php" class="w3-red w3-left w3-middle w3-padding w3-button" style="font-weight:bold;">
 <p>Cancelar Exclusão</p>
</a>


 </form>
</div>
</body>
</html>
