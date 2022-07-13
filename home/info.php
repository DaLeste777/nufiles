<?php
require_once("upload.php");
?>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000; z-index: 1;">
  <a class="navbar-brand" href="#"> <i class="fas fa-cloud-upload-alt"></i>
    <?php
    function saudacao($nome = '')
    {
      date_default_timezone_set('America/Sao_Paulo');
      $hora = date('H');
      if ($hora > 6 && $hora < 12)
        return "Bom dia " . ucwords($nome);
      else if ($hora > 12 && $hora < 18)
        return "Boa tarde " . ucwords($nome);
      else
        return "Boa noite " . ucwords($nome);
    }

    echo saudacao($_SESSION['usuario']);
    ?>!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" style="width:100%;">

    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Início<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../quemsomos">Quem Somos?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../servicos">Serviços</a>
      </li>
    </ul>



    <!-- <input type="search" class="form-control" id="consulta"> -->

    <ul class="navbar-nav float-right">
      <li class="nav-item">
        <a class="nav-link" href="..">Sair<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:12%;top: 0;z-index: 0;padding-top: 45px;">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="../contato" class="w3-bar-item w3-button"><i class="bi bi-telephone-forward-fill"></i> Contato</a>
  <a href="../ajuda" class="w3-bar-item w3-button"><i class="bi bi-info-circle-fill"></i> Ajuda</a>
  <a href="../sobre" class="w3-bar-item w3-button"><i class="bi bi-people-fill"></i> Sobre</a>

  <h3 class="w3-bar-item">Conta</h3>
  <a href="../alterar" class="w3-bar-item w3-button"><i class="bi bi-keyboard-fill"></i> Alterar Senha</a>
  <a href="../alterarEmail" class="w3-bar-item w3-button"><i class="bi bi-envelope-fill"></i> Alterar Email</a>
  <a href="../alterarDica" class="w3-bar-item w3-button"><i class="bi bi-chat-left-dots-fill"></i> Dica</a>
</div>



<?php


require_once('filtro.php');

?>

<style>
  #form {
    margin-left: 12%;
    opacity: 0.8;
    transition: 0.2s;
  }

  #form:hover {
    opacity: 1;
  }
</style>
<form enctype="multipart/form-data" method="POST" class="fixed-bottom py-1  bg-white" id="form">
  <div class="container">

    <div class="row">
      <div class="col-10">
        <!-- <input type="file" class="form-control" > -->
        <div id="multiple_upload">
          <input type="file" name="arquivo" multiple="multiple" id="uploadChange" style="display:none" />
          <label for="uploadChange" id="message" style="cursor:pointer"><span>Selecionar Arquivo</span></label>
          <div id="lista">
          </div>
        </div>
      </div>
      <div class="col-2">
        <button type="submit" value="Enviar" id="botao"><i class="fas fa-upload"></i> Enviar</button>
        <!--<input type="button" id="botao" value="Enviar" />
            <button class="btn btn-dark btn-block" style=""><i class="fas fa-upload"></i> Enviar</button>-->
      </div>
    </div>
  </div>
</form>
<script>
  $('#uploadChange').change(function() {
    var arquivo = $('#uploadChange').val();
    var nome_arquivo0 = arquivo.split("\\");
    var nome_arquivo = nome_arquivo0[nome_arquivo0.length - 1];
    $('#message span').text('Arquivo: ' + nome_arquivo);
  });
</script>
<!-- <script>
	
	
	let itens = document.getElementsByClassName("item")
	console.log(itens[0].dataset.nome)
	consulta = document.getElementById('consulta')
	consulta.addEventListener('change', (event) => {
		console.log(consulta.value)
		function mostar(item, index) {
			console.log('[forEach]', item, index);
			itens.forEach(mostar.value);
		}
		
		
	});







</script> 

<div class="container" id="app">
  <div class="row">
  </div>
  <div class="well">
    <input type="search" v-model="MySearch" class="form-control" placeholder="Search for any of the columns" />
  </div>

  <div class="row">
    <table class="table">
      <thead>
        <tr>
          <th>Nome</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="bancodedado in filteredBancodedaos ">
          <td>{{ bancodedado.item }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
-->


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.3.6/vue-resource.js"></script>