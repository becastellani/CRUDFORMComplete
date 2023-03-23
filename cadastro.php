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
    <a href="index.php" class="w3-display-topleft">
        <i class="fa fa-arrow-circle-left w3-xxlarge w3-teal w3-button"></i>
    </a>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-margin
    w3-display-middle">
        <h1 class="w3-center w3-teal w3-round-large w3-margin">
            Cadastro de Clientes
        </h1>
		<form action="cadastroAction.php" method="post">
		<input type="hidden" name="acao" value="cadastrar">
  <label for="tipo_pessoa">Tipo de Pessoa:</label>
  <input type="radio" name="tipo_pessoa" id="pessoa_fisica" value="pessoa_fisica" onclick="exibirFormulario(this)">Pessoa Física
  <input type="radio" name="tipo_pessoa" id="pessoa_juridica" value="pessoa_juridica" onclick="exibirFormulario(this)">Pessoa Jurídica

	<div id="form-pessoa-fisica" style="display:none;">
    <input type="hidden" name="txtCodigo"><br>
      <label>Nome:</label>
      <input type="text" id="txtNome"name="txtNome"><br>

      <label>CPF:</label>
      <input type="text" id="txtCpf"name="txtCpf"><br>

      <label>Cidade</label>
      <input type="text" id="txtCidade" name="txtCidade"><br>

      <label>Estado</label>
      <input type="text"  id="txtEstado" name="txtEstado"><br>

	  <label> <input type="radio" name="tipoD" id="tipoD" value="Despesa">Despesa</label>
      <label> <input type="radio" name="tipoD" id="tipoD" value="Receita">Receita</label> <br>
   
	  <label class="form-label">Escolha sua logo</label>
      <input type="file" name="logo" id="logo" class="form-control"><br><br>

	  <input type="submit" value="Cadastrar" class="w3-button w3-green">
</div>

    <div id="form-pessoa-juridica" style="display:none;">
	<input type="hidden" name="txtCodigo"><br>
	<label>Razão Social:</label>
      <input type="text" name="txtRazao"><br>
      
	  <label>CNPJ:</label>
      <input type="text" name="txtCnpj"><br>
	  
	  <label>Cidade</label>
      <input type="text" name="txtCidadeJ"><br>

      <label>Estado</label>
      <input type="text"  name="txtEstadoJ"><br>

	  <label> <input type="radio" id="tipoD" name="tipoD" value="Despesa">Despesa</label>
      <label> <input type="radio"  id="tipoD" name="tipoD" value="Receita">Receita</label><br>
   
	  <label class="form-label">Escolha sua logo</label>
      <input type="file" name="logo" class="form-control"><br><br>
	  <input type="submit" value="Cadastrar" class="w3-button w3-green">
	  </div>
    </form>

	<script>
function exibirFormulario(radio) {
  var formPessoaFisica = document.getElementById("form-pessoa-fisica");
  var formPessoaJuridica = document.getElementById("form-pessoa-juridica");

  formPessoaFisica.style.display = radio.value === "pessoa_fisica" ? "block" : "none";
  formPessoaJuridica.style.display = radio.value === "pessoa_juridica" ? "block" : "none";
}

</script>
	
</body>
</html>