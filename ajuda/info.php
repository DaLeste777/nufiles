<html>

<head>
  <title>Ajuda</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
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
          <a class="nav-link" href="../home">Início<span class="sr-only">(current)</span></a>
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

  <!-- Page Content -->
  <div class="container" style="margin-left:25%">
    <div style="margin-top:75px;">
      <h1>Documentação</h1>
      <hr>
      <div class="row">
        <img class="col-xs-12 col-md-8" src="../img/pdfimage.svg" alt="" style="max-width: 125px;">
        <a href="Matheus_Sergio_Sistema_de_Armazenamento_em_nuvem_TCC_Revisado - Apresentar.docx" download>
          <p class="col-xs-12 col-md-8">Download - Manual de instruções para utilização da ferramenta nufiles</p>
        </a>
      </div>


    </div>