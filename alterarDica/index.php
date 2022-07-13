<?php
session_start();

if ($_POST) {

    $dica2 = $_POST['dica2'];

    // if ($email1 == $email2) {

    $conn = new PDO('mysql:host=localhost;dbname=exemplo', 'root');
    $sql = "SELECT * FROM clientes WHERE dica_senha='$_POST[dica_senha]' and senha='$_POST[senha]'";
    var_dump($sql);
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $rs = $stmt->fetchAll();

    if ($rs != null) {
        $sql = "UPDATE clientes SET dica_senha = '$_POST[dica2]' WHERE dica_senha = '$_POST[dica_senha]' and senha = '$_POST[senha]'";
        var_dump($sql);
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $erro = true;
    } else {
        $erro = false;
    }
}
// } 

?>


<html>

<head>
    <link rel="shortcut icon" href="/projeto/icone_Site.ico" type="image/x-icon">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">



</head>

<body class="bg-gradient-to-r from-green-400 to-blue-500 ...">
    <style>
        body {
            background-color: #99bbff;
        }

        .caixa {
            padding-left: 30%;
            padding-top: 5%;
        }
    </style>
    <div class="caixa">
        <form method="POST" class="card col-md-6">

            <?php

            if ($_POST) {


                if ($erro == false) {
            ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Usuário ou senha incorreto!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php
                }
                ?>
                <?php if ($erro == true) {
                ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Sua dica foi alterada!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            <?php
                }
            }
            ?>

            <center>
                <font size="6">Alterar Dica</font>
            </center>
            <label for="email">Email</label>
            <input id="email" type="email" name="texto" class="form-control" required>
            <label for="dica1">Dica atual</label>
            <input id="dica1" type="text" name="dica_senha" class="form-control" required>
            <label for="dica2">Nova Dica</label>
            <input id="dica2" type="text" name="dica2" class="form-control" required>
            <label for="senha">Senha</label>
            <input id="senha" type="password" name="senha" class="form-control" required>

            <div class="row">
                <div class="col-6">

                    <button type="submit" class="btn btn-dark my-1 btn-block" @click="alterarNome" value="alert">Alterar</button>
                    <? $param = funcao1(); ?>
                </div>
                <div class="col-6">
                    <a href="../" class="btn btn-dark my-1 btn-block">Voltar</a>
                </div>
            </div>


        </form>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>