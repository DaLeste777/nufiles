<html>

<head>
  <title>Serviços</title>
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
  </div>
  <!-- Page Content -->
  <div style="margin-left:15%; padding-top:50px;">





    <div class="d-flex position-relative">
      <img src="../img/nuvemAjuda.png" class="flex-shrink-0 me-3" alt="..." style="max-width:10%;">
      <div style="padding-left:3%;">
        <h5 class="mt-0"></h5>
        <p>Hospedagem de arquivos</p>
        <p> O software foi desenvolvido para que possa ser armazenado qualquer tipo de arquivo pelo usuário de forma rapida e auto explicativa. Na plataforma seus dados estão seguros e disponíveis sempre que você precisar.</p>
      </div>
    </div>
    <br>
    <br>
    


    <div class="d-flex position-relative">

      <div style="padding-right:3%;">
        <h5 class="mt-0"></h5>
        <p>Mobilidade de dispositivos</p>
        <p> Por ser uma ferramenta em formato web, ou seja em formato de site, é muito pratico e facil o acesso, pois não é necessário ser feito download de nenhum aplicativo para celular ou programa para computador.</p>

      </div>
      <img src="../img/segurancaweb.png" class="flex-shrink-0 me-3" alt="..." style="max-width:10%;">
    </div>

    <br>
    <br>

    <div class="d-flex position-relative">
      <img src="../img/servidornuvem.png" class="flex-shrink-0 me-3" alt="..." style="max-width:10%;">
      <div style="padding-left:3%;">
        <h5 class="mt-0"></h5>
        <p>Segurança</p>
        <p> Um dos aspectos mais importantes que preservamos é a segurança de seus arquivos. Utilizando a ferramenta você tem total controle sobre os arquivos upados assim como os arquivos que compartilhou. Podendo a qualquer momento excluir da base de conhecimento sem nenhum tipo de lixeira que possa trazer vulnerabilidade ao processo.</p>
      </div>
    </div>
  </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

</html>